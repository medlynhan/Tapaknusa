
@extends('afterLogin.app')
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
        </div>
    </section>


    <section class="go-to-pay-box page-padding-left-right page-padding-bottom">
        <div>
            <p class="big-text-font">Total Harga:</p>
            <h3 class="superbig-text-font ">Rp <span id="total-price-to-pay"></span>,00</h3>
        </div>
        <button class="btn-pay medium-text-font">Lanjutkan Pembayaran</button>
    </section>
    
@endsection    

@section('scripts')
    <script>
    $(document).ready(function () {

        let attractionRecomendation = @json($attractionRecomendation);

        addCard(attractionRecomendation,$("#top-5-atraction .cards-atraksi"));
        carousellButton($("#top-5-atraction .cards-atraksi"),$("#top-5-atraction .prev-btn"),$("#top-5-atraction .next-btn") );
        clickCardContent("#top-5-atraction .cards-atraksi .card", "detailAtraction");

        let cartItems = @json($allUserItem); 
        console.log(cartItems);

        if(cartItems.length <= 0){
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
        
        
        let countTicket = 0;
        cartItems.forEach((ticket) => {
            $(".ticket-types-cart").append(`<div class="ticket-cart" > 
                <h3 class="head-title-cart superbig-text-font black">${ticket.attraction_title}</h3>
                <div class="image-cart">
                     <img src="${changeImageNameFormat(ticket.image1)}" alt="Image">
                </div>
                
                <div class="close-select-cart">
                    <span class="sub-heading-font close-ticket black">&times;</span>
                    <p class="cartId">${ticket.cart_id}</p>
                </div>
                <h3 class="big-text-font black bold title-cart">${ticket.ticket_title}</h3>
                <div class="price-cart big-text-font bold red ">
                    <p><span>Rp </span><span class="theTicketPrice">${ticket.price}</span><span>,00 </span></p>
                </div>
                <div class="btn-item-cart big-text-font" data-attribute="${ticket.ticket_title}">
                    <div class="btn-add" >+</div>
                    <div class="item-quantity black">${ticket.quantity}</div>
                    <div class="btn-subtract">-</div>
                </div>
                <div class="detail-cart big-text-font black">
                    <p>Kategori: ${ticket.category}</p>
                    <p>Fasilitas: ${ticket.description}</p>
                </div>
            </div>`)
            countTicket++;

        });

        let totalPrice  = @json($totalPrice);
        $("#total-price-to-pay").text(totalPrice);

        

            $(".ticket-cart .btn-item-cart .btn-add").on("click",function(){
                let quantityElement = $(this).closest(".ticket-cart").find(".item-quantity");  
                let ticketId = $(this).closest(".ticket-cart").find(".cartId"); 
                let cartId = parseInt(ticketId.text(),10);
                let quantity = parseInt(quantityElement.text(), 10) + 1;
                quantityElement.text(quantity);

                let addPrice =  parseInt(($(this).closest(".ticket-cart").find(".theTicketPrice")).text().replace(/[^\d]/g, ''), 10);
                totalPrice += addPrice;
                console.log("add " + addPrice) ;
                $("#total-price-to-pay").text(totalPrice);

                let ticket = {
                    id: cartId,
                    quantity: quantity
                };
                console.log("cart id : "+ticket.id);
                console.log("quantity : "+ticket.quantity);


                $.ajax({
                    url: '/editCart',  // Ganti dengan route yang sesuai
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),  // Pastikan CSRF token ditambahkan
                        editItem: ticket
                        
                    },
                    success: function (response) {
                        console.log('Tiket cart berhasil ditambahkan');
                    },
                    error: function (xhr, status, error) {
                        console.log('Tiket cart gagal ditambahkan');
                       
                    }
                });

        
            });

            
            $(".ticket-cart .btn-item-cart .btn-subtract").on("click",function(){
                let quantityElement = $(this).closest(".ticket-cart").find(".item-quantity");  
                let ticketId = $(this).closest(".ticket-cart").find(".cartId"); 
                let cartId = parseInt(ticketId.text(),10);
                let quantity = parseInt(quantityElement.text(), 10) -1;
                
                let subtractPrice = parseInt(($(this).closest(".ticket-cart").find(".theTicketPrice")).text().replace(/[^\d]/g, ''), 10);
                totalPrice -= subtractPrice;
                console.log("substract " + subtractPrice) ;
                $("#total-price-to-pay").text(totalPrice);

                if (quantity < 0){
                    quantity = 0;
                }

                quantityElement.text(quantity);

                let ticket = {
                    id: cartId,
                    quantity: quantity
                };

                console.log("ticket id : "+ticket.id);
                console.log("quantity : "+ticket.quantity);

                $.ajax({
                    url: '/editCart',  // Ganti dengan route yang sesuai
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),  // Pastikan CSRF token ditambahkan
                        editItem: ticket
                        
                    },
                    success: function (response) {
                        console.log('Tiket cart berhasil ditambahkan');
                    },
                    error: function (xhr, status, error) {
                        console.log('Tiket cart gagal ditambahkan ');
                       
                    }
                });
            });


             $(".ticket-cart .close-ticket ").on("click",function(){
                let ticketId = $(this).closest(".ticket-cart").find(".cartId"); 
                let cartId = parseInt(ticketId.text(),10);
                console.log(cartId);

                $.ajax({
                    url: '/deleteCart',  
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),  // Pastikan CSRF token ditambahkan
                        id: cartId
                        
                    },
                    success: function (response) {
                        console.log('Tiket cart berhasil dihapus');
                    },
                    error: function (xhr, status, error) {
                        console.log('Tiket cart gagal dihapus');
                        console.log('Status: ' + status);
                        console.log('Error: ' + error);
                        console.log('Response: ' + xhr.responseText);  // Menampilkan response text
                    }

                });

                window.location.href = "/cart";

        
            });

            $(".btn-pay").click(function () {
                window.location.href = "/pay";
            });
    }); 

    </script>
@endsection

@php  
     $hideHeader = true;
     $hideFooter = true;
@endphp

