<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tapaknusa - Search Result</title>
    <!--css-->
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/headerFooter.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">


    <!--css atraction-->
    <link rel="stylesheet" href="{{asset('css/page/searchResult.css')}}">

    <!--css font, jquery-->
    <link rel="stylesheet" href="plugin/animate.css">
    <link rel="stylesheet" href="plugin/fontawesome-free-6.7.2-web/fontawesome-free-6.7.2-web/css/all.css">


    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    <!--flaticon-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    
</head>
<body class="medium-text-font fadeInDown2">
    <section class="header page-padding-left-right">
        <button class="back-btn" onclick="window.history.back()"> <i class="fi fi-br-arrow-small-left sub-heading-font black"></i></button>
    </section>

    <!--Search Result Section-->
    <section class="result-section page-padding-left-right">
        <div class="result-header">
            <h2 class="item-searched superbig-text-font black">
              
            </h2>
            <p class="result-message big-text-font black"></p>
        </div>
    
        <div class="result-grid"></div>
        <div class="carousel"></div>
        <div class="result-addition">
            <div class="lihat-lanjut">
                <a href="#" class="medium-text-font red"><p>Tampilkan Semua</p></a>
            </div>
        </div>
    </section>    



    <!--Rekomendasi item serupa-->
    <section class="page-padding-left-right " id="fyp-atraction" >
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

    <!-- Footer -->
    <footer class="footer-section fadeInDown">
        <div class="footer-container page-padding-left-right">
            <div class="footer-content">
                <h2 class="small-heading-font">Get in touch <i class="fi fi-rr-island-tropical big-text-font"></i></h2>
                <div  class="footer-social-media">
                    <i class="fi fi-brands-instagram big-text-font"></i><i class="fi fi-brands-facebook big-text-font"></i><i class="fi fi-brands-tik-tok big-text-font"></i>
                </div>
                <p class="medium-text-font">helo@tapaknusa.com</p>
            </div>
            <div class="footer-categories"> 
                <div class="footer-links">
                    <ul>
                        <li><a class="medium-text-font bold" href="atraction.html">Atraksi</a></li>
                        <li><a class="medium-text-font" href="festival.html">Yogyakarta</a></li>
                        <li><a class="medium-text-font" href="patner.html">Bali</a></li>
                        <li><a class="medium-text-font" href="gamification.html">Jawa Timur</a></li>
                        <li><a class="medium-text-font" href="patner.html">Sumatera</a></li>
                        <li><a class="medium-text-font" href="patner.html">Kalimantan</a></li>
                        <li><a class="medium-text-font" href="patner.html">NTT</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a class="medium-text-font bold" href="festival.html">Festival</a></li>
                        <li><a class="medium-text-font" href="festival.html">Yogyakarta</a></li>
                        <li><a class="medium-text-font" href="patner.html">Bali</a></li>
                        <li><a class="medium-text-font" href="gamification.html">Jawa Timur</a></li>
                        <li><a class="medium-text-font" href="patner.html">Sumatera</a></li>
                        <li><a class="medium-text-font" href="patner.html">Kalimantan</a></li>
                        <li><a class="medium-text-font" href="patner.html">NTT</a></li>
                    </ul>
                </div>                       
                <div class="footer-links">
                    <ul>
                        <li><a class="medium-text-font bold" href="atraction.html">Lainnya</a></li>
                        <li><a class="medium-text-font" href="festival.html">Wawasan Nusantara</a></li>
                        <li><a class="medium-text-font" href="patner.html">Mitra & Kolaborasi</a></li>
                        <li><a class="medium-text-font" href="patner.html">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom ">
            <p class="medium-text-font">© 2025 Tapaknusa. Made in Tangerang, Indonesia</p>
        </div>
    </footer>



    <script src="{{ asset('js/jquery-1.7.1.min.js') }}"></script>
    <script src="{{ asset('js/data.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/searchBox.js') }}"></script>
    <script src="{{ asset('js/carousell.js') }}"></script>
    
    <script>
     $(document).ready(function () {

        addCard($("#fyp-atraction .cards-atraksi"),"atraksi",0,0,0,7);
        carousellButton($("#fyp-atraction .cards-atraksi"),$("#fyp-atraction .prev-btn"),$("#fyp-atraction .next-btn") );
        clickCardContent(".card", "detailAtraction");



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

        function getFilteredData(){
            let urlParams = new URLSearchParams(window.location.search); 
            let searchQueryItem = urlParams.get("find") || "";
            let searchQueryTanggal = urlParams.get("tanggal") || "";
            let searchQueryStatus = urlParams.get("status");

            let filteredData=[];

            if (searchQueryStatus === "atraksi") {
                if(searchQueryTanggal !== ""){
                    $(".item-searched").text(`Pencarian untuk "${searchQueryItem}" tanggal "${searchQueryTanggal}"`);

                }else{
                    $(".item-searched").text(`Pencarian untuk "${searchQueryItem}"`);
                                    
                }

                filteredData = wisataBudaya.filter(wisata => 
                    wisata.title.toLowerCase().includes(searchQueryItem.toLowerCase()) && 
                    wisata.status === "atraksi"
                );



            } else if (searchQueryStatus === "festival") {
                if(searchQueryTanggal !== ""){
                    $(".item-searched").text(`Pencarian untuk "${searchQueryItem}" tanggal "${searchQueryTanggal}"`);
                    
                    filteredData = wisataBudaya.filter(wisata => 
                    wisata.title.toLowerCase().includes(searchQueryItem.toLowerCase()) && 
                    wisata.status === "festival" && wisata.schedule.toLowerCase() === searchQueryTanggal.toLowerCase()
                    );
                    
                }else{
                    $(".item-searched").text(`Pencarian untuk "${searchQueryItem}"`);
                    
                    filteredData = wisataBudaya.filter(wisata => 
                    wisata.title.toLowerCase().includes(searchQueryItem.toLowerCase()) && 
                    wisata.status === "festival"
                    );                  
                }

            } else if(searchQueryStatus === "all") {

                if(searchQueryTanggal !== ""){
                    $(".item-searched").text(`Pencarian untuk "${searchQueryItem}" tanggal "${searchQueryTanggal}"`);
                    
                    filteredData = wisataBudaya.filter(wisata => 
                    wisata.title.toLowerCase().includes(searchQueryItem.toLowerCase()) && wisata.schedule.toLowerCase() === searchQueryTanggal.toLowerCase()
                    );
                    
                }else{
                    $(".item-searched").text(`Pencarian untuk "${searchQueryItem}"`);
                                      
                    filteredData = wisataBudaya.filter(wisata => 
                    wisata.title.toLowerCase().includes(searchQueryItem.toLowerCase())
                    );                  
                }
  
            }


            return filteredData;
        }
  
        

        function displayMessageResult(filteredDataLength){
            if (filteredDataLength === 0){
                $(".result-message").text("Yah, kami tidak menemukan apa yang kamu cari");
                $(".result-addition").css({"display":"none"});     
            }else{
                $(".result-message").text(`Berhasil Menemukan ${filteredDataLength} destinasi wisata`);
            }
        }


        function addDataGrid(){

            let filteredData = getFilteredData();
            let filteredDataLength = filteredData.length;
            displayMessageResult(filteredDataLength);

            filteredData.forEach((wisata) => {
                let card = `
                <div class="card" data-attribute="${wisata.title}" onclick="redirectToDetail('${wisata.title}', '${wisata.status}')">
                    <img src="${wisata.image}" alt="${wisata.title}">
                    <h3 class="medium-text-font bold">${wisata.title}</h3>
                    <p class="medium-text-font">⭐⭐⭐⭐⭐ ${wisata.rating}</p>
                    <p class="price medium-text-font bold">${wisata.startPrice}</p>
                </div>
                `;
                $(".result-grid").append(card);

            });
            

        }
        


        function displayButtonShowAllDataGrid() {

            let items = $(".result-grid .card");
            let columns = getComputedStyle(document.querySelector(".result-grid")).gridTemplateColumns.split(" ").length;
            let rows = Math.ceil(items.length / columns);

            if(rows > 2){
                items.each(function(index) {
                    if (index >= columns * 2) {
                        $(this).hide();
                    }
                });

                $(".result-addition").css({"display":"flex"});

                //click "Tampilkan Semua"
                $(".result-addition .lihat-lanjut").on("click",function(){
                    $(".result-addition").css({"display":"none"});
                    $(".result-grid").css({"padding-bottom":"5em"});

                    items.each(function(index) {
                        $(this).show();
                    });


                });
                


            }else{ //kalau kurang dari 2 baris, diplay all items
                $(".result-addition").css({"display":"none"});
                $(".result-grid").css({"padding-bottom":"5em"});

                items.each(function(index) {
                    $(this).show();
                });              
            }


        }        


        function addDataCarousell(){

            let filteredData = getFilteredData();
            let filteredDataLength = filteredData.length;
            displayMessageResult(filteredDataLength);

            let carousel  =  `            
                <button class="prev-btn"><i class="fas fa-chevron-left white big-text-font"></i></button>
                <div class="content">
                    <div class="cards-atraksi medium-text-font"></div>
                </div>
                <button class="next-btn"><i class="fas fa-chevron-right  white big-text-font"></i></button>
            `;

            $(".result-section .carousel").append(carousel);


            filteredData.forEach((wisata) => {
                let card = `
                <div class="card" data-attribute="${wisata.title}" onclick="redirectToDetail('${wisata.title}', '${wisata.status}')">
                    <img src="${wisata.image}" alt="${wisata.title}">
                    <h3 class="medium-text-font bold">${wisata.title}</h3>
                    <p class="medium-text-font">⭐⭐⭐⭐⭐ ${wisata.rating}</p>
                    <p class="price medium-text-font bold">${wisata.startPrice}</p>
                </div>
                `;
                $(".result-section .cards-atraksi").append(card);

            });
        }


        function usingGridOrCarousell(){
            if (window.matchMedia("(min-width: 500px)").matches){
                $(".result-grid").empty();
                $(".result-section .carousel").empty(); 
                addDataGrid();
                displayButtonShowAllDataGrid();
                
            }else {
                $(".result-grid").empty();
                $(".result-section .carousel").empty(); 
                $(".result-addition").css({"display":"none"});
                addDataCarousell();   

                carousellButton($(".result-section .cards-atraksi"),$(".result-section .prev-btn"),$(".result-section .next-btn") );
                clickCardContent(".result-section .cards-atraksi .card", "detailAtraction");     
            }

        }

        

        
        usingGridOrCarousell();
        $(window).on("resize", usingGridOrCarousell);
                
    });  

    </script>


</body>
</html>