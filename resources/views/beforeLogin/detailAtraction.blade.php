@extends('beforeLogin.app')    
@section('title', 'Tapaknusa')
@section('content')
    
    <section class="back-btn-section detailAtraction page-padding-left-right fadeInDown2">
        <button class="back-btn" onclick="window.history.back()"><i class="fi fi-br-angle-left big-text-font black"></i></button>
        <h3 class="title  superbig-text-font black"></h3>
    </section>


    <!-- Container Section -->
    <section class="container page-padding-left-right black fadeInDown2" >
        <!--Detail-->
        <div class="detail">
            <div class="title superbig-text-font black"><p></p></div>
            <div class="schedule">
                <i class="fi fi-br-clock-three big-text-font black"></i>
                <p></p>
            </div>
            <div class="address">
                <i class="fi fi-br-marker big-text-font black"></i>
                <p></p>
            </div>
        </div>

        <!--Image-->
        <div class="image-destination">
        </div>

        <!--Ticket Button-->
        <div class="ticket-button">
            <div> 
                <h2 class="medium-text-font">Mulai dari</h2>
                <p class="big-text-font"></p>
            </div>
            <a href="#searchTicketContainer"><button  class="btn-cari-ticket medium-text-font">Cari ticket</button></a>
        </div>
         <!--Description-->
        <div class="description">
            <h2 class="superbig-text-font black">Deskripsi</h2>
        </div>
        <!--Ulasan-->
        <div class="ulasan" id="searchTicketContainer">
            <h2 class="superbig-text-font black">Ulasan</h2>
            <div class="ulasan-container"></div>
        </div>
        <!--Ticket-->
        <div class="ticket-container">
            <div class="search-ticket">
                <h2 class="superbig-text-font black">Cari Ticket</h2>
            </div>

            <div class="ticket-types">

            </div>

            <div class="ticket-price ">
                <div>
                    <p class="medium-text-font bold">Harga Total</p>
                    <div class="price-text">
                        <p class="big-text-font">Rp&nbsp;</p>
                        <p class="total-price big-text-font">0</p>
                        <p class="big-text-font">,00</p>
                    </div>
                    
                </div>
                <div class="ticket-price-button">
                    <button  class="btn-keranjang medium-text-font k-login">Masukkan Keranjang</button>
                    <button  class="btn-pesan medium-text-font ps-login">Pesan Sekarang</button>
                </div>
            </div>
        </div>

    </section>

    <!--Rekomendasi item serupa-->
    <section class="page-padding-left-right fadeInDown2" id="fyp-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-face-smile-hearts supersmall-heading-font black"></i> Aktivitas Serupa Lainnya
            </p>            
            <p class="medium-text-font black">Mungkin ada aktivitas yang sesuai dengan minat kamu ? </p>
            <!--Carousell-->
            <div class="carousel">
                <button class="prev-btn"><i class="fas fa-chevron-left white big-text-font"></i></button>
                <div class="content">
                    <div class="cards-atraksi medium-text-font"></div>
                </div>
                <button class="next-btn"><i class="fas fa-chevron-right  white big-text-font"></i></button>
            </div>
        </div>
        <div class="recomendation-addition">
            <div class="lihat-lanjut">
                <a href="javascript:window.history.back()" class="medium-text-font red"><p>Kembali ke Beranda</p></a>
            </div>
        </div>
    </section>

    <div class="search-modal"></div>
    <div class="information-input-card"></div>

    <div class="information-modal" id="informationModal">
        <div class="information-content">
            <p class="medium-text-font black">Tolong masukkan tanggal pemesanan terlebih dahulu.</p>
        </div>
    </div>

    <div class="information-need-to-login" id="informationNeedToLoginModal">
        <div class="information-content">
            <p class="medium-text-font black">Untuk melanjutkan, silakan login terlebih dahulu.</p>
    </div>
    
@endsection
@section('scripts')
    <script>
     $(document).ready(function () {

        
        let attractionRecomendation = @json($attractionRecomendation);
        console.log("attraction recomendation :"+attractionRecomendation);


        addCard(attractionRecomendation, $("#fyp-atraction .cards-atraksi"));
        carousellButton($("#fyp-atraction .cards-atraksi"),$("#fyp-atraction .prev-btn"),$("#fyp-atraction .next-btn") );
        clickCardContent("#fyp-atraction .cards-atraksi .card", "/TappaknusadetailAtraction");
   

        function responsiveHero(){

            function applyResponsiveHero(){             
                if ($(window).width() > $(window).height()){//laptop
                    $(".hero-detail ").css({"min-height":"70vh"});
                }else{
                    if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                        $(".hero-detail ").css({"min-height":"45vh"});
                    }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                        $(".hero-detail ").css({"min-height":"40vh"});
                    }
                }

            }

            applyResponsiveHero();
            $(window).on("resize",applyResponsiveHero);
        }

        responsiveHero();


        function responsiveLihatLanjutBtn(){

        function applyResponsiveLihatLanjutBtn(){             
            if ($(window).width() > $(window).height()){//laptop
                $(".lihat-lanjut").css({"width":"28%"});
            }else{
                if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                    $(".lihat-lanjut").css({"width":"45%"});
                }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                    $(".lihat-lanjut").css({"width":"50%"});
                }
            }

        }

        applyResponsiveLihatLanjutBtn();
        $(window).on("resize",applyResponsiveLihatLanjutBtn);
        }


        responsiveLihatLanjutBtn();


        let detailAttraction = @json($detailAttraction); 
        let dataDetail = detailAttraction[0];
        console.log("dataDetail :"+dataDetail);
        console.log("dataDetail :"+dataDetail.title);

        
        $(".back-btn-section .title").text(dataDetail.title);

        if(dataDetail.schedule != null){
            console.log("schedule null");
            $(".container .schedule p").text(dataDetail.schedule);
        }else{
            console.log("schedule ga null");
            $(".container .schedule p").text(dataDetail.operational_hours);
        }

        $(".container .address p").text(dataDetail.address);
        $(".container .ticket-button p").text(dataDetail.startPrice);


        function changeImageNameFormat(url){
            var filename = url.split('/').pop();
            var baseUrl = "https://tapaknusa-images.imgix.net/";
            return  baseUrl + filename + "?auto=compress&fm=webp";
        }


        $(".container .image-destination").append(`<img class="image1" src="${changeImageNameFormat(dataDetail.image1)}" alt="gambar-atraksi">`);
        $(".container .image-destination").append(`<img class="image2" src="${changeImageNameFormat(dataDetail.image2)}" alt="gambar-atraksi">`);
        $(".container .image-destination").append(`<img class="image3" src="${changeImageNameFormat(dataDetail.image3)}" alt="gambar-atraksi">`);
        $(".container .description").append(`<p class="medium-text-font black">${dataDetail.description}</p>`);
       
        let reviews = @json($reviews); 
        console.log("reviews :"+reviews);

        if (reviews.length > 0) {
            reviews.forEach((review) => {
                $(".container .ulasan-container").append(`
                <div class="ulasan-content">
                    <p class="bold">${review.name}</p>
                    <p>⭐⭐⭐⭐⭐ ${review.rating} - ${review.comment}</p>
                </div>
                `);
            });
        }


        $(".container .search-ticket").append(`
            <div class="search-box black medium-text-font ">
                <div class="date-picker-container">
                    <h2 class="medium-text-font black">Pilih tanggal</h2>
                    <div class="header-date-picker-container">
                        <input type="date" class="ticket-date-picker medium-text-font black" onClick="change">
                        <p class="ticket-this-day-date">dd/mm/yyyy</p>
                        <i class="ticket-calender-icon fi fi-br-calendar big-text-font black"></i>
                    </div> 
                </div>
                <!--Submit button-->
                <button  class="btn-search medium-text-font">Cari</button>
            </div>

        `);


        dateCek($(".ticket-date-picker"),$(".ticket-this-day-date"));

        $(document).on("change", ".ticket-date-picker", function() {
            let tempDate = $(this).val();
            if (tempDate !== "") {
                $(".ticket-this-day-date").css({"color": "var(--black)"});  // Menghapus border saat ada tanggal yang dipilih
            }else{
                $(".ticket-this-day-date").css({"color": "var(--white)"}); 
            }
        });


        function informationCard() {

            $(document).on("click",".search-ticket .btn-search",function () {
                let tempDate = $(".ticket-date-picker").val();
                console.log("temp : " + tempDate);

                if(tempDate !== ""){
                    console.log("inputan udh ga kosong");
                    $(".ticket-date-picker").css({"border":"none"});
                    $(".container .ticket-types").css({"display":"flex"});
                }else{
                    console.log("inputan ga boleh kosong");
                    $(".information-modal").css({ display: "flex" });

                }

                setTimeout(function () {
                    $(".information-modal").css({ display: "none" });
                }, 800);
                
            });
            
        }

        informationCard();


        
        let ticketTypes = @json($ticketTypes); 
        console.log("ticketTypes :"+ticketTypes);


        if (ticketTypes.length > 0) {
            ticketTypes.forEach( (ticket) => {

                $(".container .ticket-types").append(`
                    <div class="ticket"> 
                        <h3 class="big-text-font black bold title">${ticket.title}</h3>
                        <div class="price big-text-font bold red ">
                            <p><span>Rp </span>${ticket.price.toLocaleString('id-ID')}<span>,00 </span></p>
                        </div>
                        <div class="btn-item big-text-font" data-attribute="${ticket.title}">
                            <div class="btn-add" >+</div>
                            <div class="item-quantity black">0</div>
                            <div class="btn-subtract">-</div>
                        </div>
                        <div class="detail">
                            <p>Kategori: ${ticket.category}</p>
                            <p>Fasilitas: ${ticket.description}</p>
                        </div>
                    </div>
                `);

            });
            
        }


        function ticketPrice(){

            let priceTotal = 0;

            function calculateTotalPrice(element,quantity){
                    let item = ticketTypes.find((ticket) => ticket.title === element.data("attribute") );
                    console.log("coba"+element.data("attribute"));
                

                    return item.price * quantity;
            }


            $(document).on("click", ".btn-add", function () {
                let quantityElement = $(this).closest(".ticket").find(".item-quantity");  
                let quantity = parseInt(quantityElement.text()) + 1;  
                quantityElement.text(quantity);

                let itemPrice = calculateTotalPrice($(this).closest(".btn-item"),quantity);

                priceTotal += itemPrice;
                console.log("price:"+priceTotal);
                $(".total-price").text(priceTotal.toLocaleString('id-ID'));
            });


            $(document).on("click", ".btn-subtract", function () {
                let quantityElement = $(this).closest(".ticket").find(".item-quantity");  
                let quantity = parseInt(quantityElement.text()) - 1;  
                if (quantity < 0){
                    quantity = 0;
                }
                quantityElement.text(quantity);

                let itemPrice = calculateTotalPrice($(this).closest(".btn-item"),quantity);

                priceTotal -= itemPrice;
                $(".total-price").text(priceTotal.toLocaleString('id-ID'));
            });


            }

            ticketPrice();

        function needToLoginFirst(theContent) {
            $(theContent).click(function () {
                // Tampilkan elemen terkait dengan tombol yang diklik
                $('.information-need-to-login').css({ display: "flex" });

                // Menyembunyikan elemen setelah 800ms
                setTimeout(function () {
                    $('.information-need-to-login').css({ display: "none" });
                }, 800);  // Bind this agar tetap mengarah ke elemen yang diklik
            });

        }

        needToLoginFirst(".k-login");
        needToLoginFirst(".ps-login");

    });  

    </script>
@endsection