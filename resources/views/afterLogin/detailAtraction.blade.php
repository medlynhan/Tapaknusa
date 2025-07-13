@extends('afterLogin.app')    
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
                <h2 class="medium-text-font red">Mulai dari</h2>
                <p class="big-text-font red "></p>
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
                    <p class="medium-text-font bold black">Harga Total</p>
                    <div class="price-text">
                        <p class="big-text-font black">Rp&nbsp;</p>
                        <p class="total-price big-text-font black">0</p>
                        <p class="big-text-font black">,00</p>
                    </div>
                    
                </div>
                <div class="ticket-price-button">
                    <button  class="btn-keranjang medium-text-font">Masukkan Keranjang</button>
                    <button  class="btn-pesan medium-text-font  ">Pesan Sekarang</button>
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
            <p class="medium-text-font black dateEmpty">
                Mohon untuk mengisi tanggal pemesanan terlebih dahulu.
            </p>
        @php
            $festivalDate = $detailAttraction->first();
            $formattedDate = \Carbon\Carbon::parse($festivalDate->schedule)->format('d F Y');
        @endphp
            <p class="medium-text-font black dateWrong">
                 Festival akan berlangsung pada {{ $formattedDate}}.
            </p>
           
        </div>
    </div>

    <div class="information-already-added" id="informationAlreadyAdded">
        <div class="information-content">
            <p class="alreadyAdded medium-text-font black"></p>
    </div>
    
@endsection
@section('scripts')
    <script>
     $(document).ready(function () {

        
        let attractionRecomendation = @json($attractionRecomendation);
        console.log("attraction recomendation :"+attractionRecomendation);


        addCard(attractionRecomendation, $("#fyp-atraction .cards-atraksi"));
        carousellButton($("#fyp-atraction .cards-atraksi"),$("#fyp-atraction .prev-btn"),$("#fyp-atraction .next-btn") );
        clickCardContent("#fyp-atraction .cards-atraksi .card", "/detailAtraction");
   

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

        var schedule = dataDetail.schedule;
        var date = new Date(schedule);
        var formattedDate = date.toLocaleDateString('id-ID');

        if(dataDetail.schedule != null){
            console.log("schedule null");
            $(".container .schedule p").text(formattedDate);
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




        const festivalDate = @json($festivalDate);

        if (festivalDate.status === "festival"){
            console.log("uda mausk belommmm");
            $(".container .search-ticket").append(`
                <div class="search-box black medium-text-font ">
                    <div class="date-picker-container">
                        <h2 class="medium-text-font black search-box-text">Tanggal festival</h2>
                        <div class="header-date-picker-container">
                            <p class="medium-text-font black">${formattedDate}</p>
                            <i class="ticket-calender-icon fi fi-br-calendar big-text-font black"></i>
                        </div> 
                    </div>
                    <!--Submit button-->
                    <button  class="btn-search medium-text-font">Cari</button>
                </div>

            `);           

        }else{
            $(".container .search-ticket").append(`
                <div class="search-box black medium-text-font ">
                    <div class="date-picker-container">
                        <h2 class="medium-text-font black search-box-text">Pilih tanggal</h2>
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
        }


        dateCek($(".ticket-date-picker"),$(".ticket-this-day-date"));

        $(document).on("change", ".ticket-date-picker", function() {
            let tempDate = $(this).val();
            if (tempDate !== "") {
                $(".ticket-this-day-date").css({"color": "var(--black)"});  
            }else{
                $(".ticket-this-day-date").css({"color": "var(--white)"}); 
            }
        });



        let tempDate = "";
        function informationCard() {
            console.log( "festivalDate : ", festivalDate.schedule);

            $(document).on("click",".search-ticket .btn-search",function () {

                tempDate = $(".ticket-date-picker").val();
                console.log("temp : " + tempDate);

                
                console.log("festival status : "+festivalDate.status);
            
                if ((festivalDate.status === "festival")){
                    console.log("inputan udh ga kosong");
                    $(".ticket-date-picker").css({"border":"none"});
                    $(".container .ticket-types").css({"display":"flex"});
                    console.log("coba 1");
                    
                }else{
                    if (tempDate !== "" ){
                        console.log("inputan udh ga kosong");
                        $(".ticket-date-picker").css({"border":"none"});
                        $(".container .ticket-types").css({"display":"flex"});
                        console.log("coba 4");
                    }else{
                        console.log("inputan ga boleh kosong");
                        $(".information-modal").css({ display: "flex" });
                        $(".dateWrong").css({ display: "none" });
                        $(".dateEmpty").css({ display: "flex" });
                        console.log("coba 2");                       
                    }
                }


                setTimeout(function () {
                    $(".information-modal").css({ display: "none" });
                }, 800);
                
            });
            
        }

        informationCard();

        
        let ticketTypes = @json($ticketTypes); 
        console.log("ticketTypes :"+ticketTypes);

        let ticketCount =0;
        if (ticketTypes.length > 0) {
            ticketTypes.forEach( (ticket) => {

                $(".container .ticket-types").append(`
                    <div class="ticket" id="ticket${ticketCount}"> 
                        <p class="ticket-types-id">${ticket.id}</p>
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
                ticketCount ++;

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

        function alreadyAdded() {
           
            $('.information-already-added').css({ display: "flex" });
            
            setTimeout(function () {
                $('.information-already-added').css({ display: "none" });
            }, 800); 

        }

        

function addToCart(ticketCount) {
    $('.btn-keranjang').click(function () {
        console.log("click");
        let ticketDate = schedule;
        if (dataDetail.status === "atraksi"){
            ticketDate = tempDate;
        }
        console.log("ajax temp date: " + ticketDate);

        let allTickets = []; 
        // Array untuk menyimpan tiket yang akan ditambahkan ke keranjang
        for (let i = 0; i < ticketCount; i++) {
            let ticketId = +$(`#ticket${i} .ticket-types-id`).text(); // Ambil ticket ID
            let ticketQuantity = parseInt($(`#ticket${i} .item-quantity`).text(), 10);  // Ambil quantity tiket dan parse ke integer
            let ticket = ticketTypes.find((ticket) => ticket.id === ticketId); // Cari tiket berdasarkan ID

            // Hanya kirim tiket yang quantity-nya lebih dari 0
            if (ticketQuantity != 0 ) {
                allTickets.push({
                    id: ticketId,
                    quantity: ticketQuantity,
                    ticketDate: ticketDate
                });
            }
        }

        console.log("allTicket: " + JSON.stringify(allTickets));

        if (allTickets.length > 0) { 
            $.ajax({
                url: '/addCart',  // Ganti dengan route yang sesuai
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),  // Pastikan CSRF token ditambahkan
                    tickets: allTickets
                },
                success: function (response) {
                    console.log(response);  // Log response untuk debugging
                    if (response.success) {
                        $('.alreadyAdded').text('Tiket berhasil ditambahkan');
                    } else {
                        $('.alreadyAdded').text('Tiket gagal ditambahkan: ' + response.message);
                    }
                    alreadyAdded();
                },
                error: function (xhr, status, error) {
                    console.log(error);  // Log error untuk debugging
                    $('.alreadyAdded').text('Tiket gagal ditambahkan');
                    alreadyAdded();
                }
            });
        } else {
            $('.alreadyAdded').text('Tidak ada tiket yang valid untuk ditambahkan.');
            alreadyAdded();
        }
    });
}


        addToCart(ticketCount);
        

    });  

    </script>
@endsection