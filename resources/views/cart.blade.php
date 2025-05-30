
@extends('app')
@section('title', 'Tapaknusa')
@section('content')

    <!-- Header -->
    <section class="fadeInDown page-padding-left-right page-padding-top page-padding-bottom">
        <button class="back-btn" onclick="window.history.back()"><i class="fi fi-br-angle-left big-text-font black"></i></button>
        <div class="cart-empty">
            <p class="superbig-text-font black">Oops... Keranjang belanjamu masih Kosong!</p>
        </div>
        <div class="cart-container">
            <p class="superbig-text-font black" >Keranjangnya udah mantap? Kalau iya, yuk kita lanjut!</p>
        </div>
    </section>


    <!-- Rekomendasi Produk -->
    <section class="recomendation fadeInDown page-padding-left-right page-padding-bottom" id="top-5-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-review supersmall-heading-font black"></i> Mungkin Tertarik Dengan Ini ?
            </p>            
            <p class="medium-text-font black">Top Atraksi Unik yang harus kamu rasain</p>
            <!--Carousell-->

            <div class="carousel">
                <button class="prev-btn"><i class="fas fa-chevron-left white big-text-font"></i></button>
                <div class="content">
                    <div class="cards-atraksi medium-text-font"></div>
                </div>
                <button class="next-btn"><i class="fas fa-chevron-right  white big-text-font"></i></button>
            </div>
        </div>
    </section>


    <section class="ticket-in-cart fadeInDown page-padding-left-right page-padding-bottom"> 
        <div class="ticket-types-cart">
            <div class="ticket-cart"> 
                <h3 class="head-title-cart superbig-text-font black">Ticket Title</h3>
                <div class="image-cart"></div>
                <div class="close-select-cart">
                    <span class="close-ticket">&times;</span>
                </div>
                <h3 class="big-text-font black bold title-cart">${ticket.title}</h3>
                <div class="price-cart big-text-font bold red ">
                    <p><span>Rp </span>${ticket.price}<span>,00 </span></p>
                </div>
                <div class="btn-item-cart big-text-font" data-attribute="${ticket.title}">
                    <div class="btn-add" >+</div>
                    <div class="item-quantity black">0</div>
                    <div class="btn-subtract">-</div>
                </div>
                <div class="detail-cart big-text-font black">
                    <p>Kategori: ${ticket.category}</p>
                    <p>Fasilitas: ${ticket.facilities.join(", ")}</p>
                </div>
            </div>
            
        </div>
    </section>


    <section class="go-to-pay-box page-padding-left-right page-padding-bottom">
        <div>
            <p class="big-text-font">Total Harga:</p>
            <h3 id="total-price-to-pay" class="superbig-text-font ">Rp 0,00</h3>
        </div>
        <button class="btn-pay medium-text-font">Lanjutkan Pembayaran</button>
    </section>
    
@endsection    

@section('scripts')
    <script>
    $(document).ready(function () {
        addCard($("#top-5-atraction .cards-atraksi"),"atraksi",0,0,7,12);
        carousellButton($("#top-5-atraction .cards-atraksi"),$("#top-5-atraction .prev-btn"),$("#top-5-atraction .next-btn") );
        clickCardContent("#top-5-atraction .cards-atraksi .card", "detailAtraction");

        
        isCartEmpty = false;
        if(isCartEmpty){
            $(".go-to-pay-box").hide();
            $(".cart-container").hide();
            $(".ticket-in-cart").hide();

            $(".recomendation").show();
            $(".cart-empty").show();
        }else{
            $(".recomendation").hide();
            $(".cart-empty").hide();

            $(".go-to-pay-box").show();
            $(".cart-container").show();
            $(".ticket-in-cart").show();
        }
        


        function ticketPrice(){

            let priceTotal = 0;

            function calculateTotalPrice(element,quantity){
                    let item = ticketAtraction.find((ticket) => ticket.title === element.data("attribute") );
                    console.log("coba"+element.data("attribute"));
                

                    return item.price * quantity;
            }


            $(".ticket-cart .btn-item-cart .btn-add").on("click",function(){
                let quantityElement = $(this).closest(".ticket-cart").find(".item-quantity");  
                let quantity = parseInt(quantityElement.text()) + 1;  
                quantityElement.text(quantity);

                let itemPrice = calculateTotalPrice($(this).closest(".btn-item-cart"),quantity);

                priceTotal += itemPrice;
                console.log("price:"+priceTotal);
                $("total-price-to-pay").text(priceTotal);
            });


            $(".ticket-cart .btn-item-cart .btn-subtract").on("click",function(){
                let quantityElement = $(this).closest(".ticket-cart").find(".item-quantity");  
                let quantity = parseInt(quantityElement.text()) - 1;  
                if (quantity < 0){
                    quantity = 0;
                }
                quantityElement.text(quantity);

                let itemPrice = calculateTotalPrice($(this).closest(".btn-item-cart"),quantity);

                priceTotal -= itemPrice;
                $("total-price-to-pay").text(priceTotal);
            });


            }

            ticketPrice();


            $(".btn-pay").click(function () {
                window.location.href = "{{route('pay')}}";
            
            });
    }); 

    </script>
@endsection

@php  
     $hideHeader = true;
     $hideFooter = true;
@endphp

