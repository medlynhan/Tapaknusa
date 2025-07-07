@extends('beforeLogin.app')    
@section('title', 'Tapaknusa')
@section('content')

    <!-- Hero Section -->
    <section class="hero-culture" >
        <div class="hero-content fadeInDown page-padding-left-right  ">
            <h2 class="sub-heading-font location-title"></h2>
        
            <div class="search-box black medium-text-font fadeInDown delay-4s ">
                <div class="search-container">
                    <!--Search-->
                    <input type="text" id="search-input" class=" black medium-text-font" placeholder="Cari atraksi...">
                    <!--Dropdown list-->  
                    <div class="date-picker-container">
                        <input type="date" class="date-picker" onClick="change">
                        <p class="this-day-date black"></p>
                        <div class="calendar-icon">
                            <i class="fi fi-br-calendar calendar-icon big-text-font black"></i>
                        </div>
                    </div>
                </div>
                <div class="location-ddl fadeInDown delay-4s">
                    <div class="location-choices">
                            <i class="fi fi-br-marker big-text-font white"></i>
                    </div>
                    <div class="location-modal fadeInDown2">
                        <div class="locationSelect medium-text-font white">
                            <div class="location-header">
                                <h2 class="superbig-text-font black">Pilih Destinasi Lokasi</h2>
                                <span class="close-location black">&times;</span>
                            </div>
                            <div class="location-grid thin">
                            <div class="culture-card card1" data-attribute="Yogyakarta">
                                <img src="https://tapaknusa-images.imgix.net/yogyakarta.jpg" alt="Yogyakarta" loading="lazy">
                                <div class="label">Yogyakarta</div>
                                <div class="info">21 Aktivitas</div>
                            </div>
                            <div class="culture-card card2" data-attribute="Sumatera">
                                <img src="https://tapaknusa-images.imgix.net/sumatera.jpg" alt="Sumatera" loading="lazy">
                                <div class="label">Sumatera</div>
                                <div class="info ">13 Aktivitas</div>
                            </div>
                            <div class="culture-card card3" data-attribute="Pulau Bali">
                                <img src="https://tapaknusa-images.imgix.net/pulau-bali.jpg" alt="Bali" loading="lazy">
                                <div class="label">Bali</div>
                                <div class="info">26 Aktivitas</div>
                            </div>
                            <div class="culture-card card4" data-attribute="Kalimantan">
                                <img src="https://tapaknusa-images.imgix.net/kalimantan.jpg" alt="Kalimantan" loading="lazy">
                                <div class="label">Kalimantan</div>
                                <div class="info">15 Aktivitas</div>
                            </div>
                            <div class="culture-card card5" data-attribute="Jawa Timur">
                                <img src="https://tapaknusa-images.imgix.net/jawa-timur.jpg" alt="Jawa Timur" loading="lazy">
                                <div class="label">Jawa Timur</div>
                                <div class="info">9 Aktivitas</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Submit button-->
                <button class="btn-search medium-text-font">Cari</button>
            </div>
    </section>

    <!-- Explore Atraction Section -->

    <section class="page-padding-left-right" id="top-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-bs-castle supersmall-heading-font black"></i> Atraksi Untuk Kamu
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


    <section class="page-padding-left-right page-padding-bottom" id="top-festival" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-bs-stage-concert supersmall-heading-font black"></i> Festival Untuk Kamu
            </p>            
            <p class="medium-text-font black">Top Festival Unik yang harus kamu rasain</p>
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

    <div class="search-modal"></div>

    <div class="information-need-to-login" id="informationNeedToLoginModal">
        <div class="information-content">
            <p class="medium-text-font black">Untuk melanjutkan, silakan login terlebih dahulu.</p>
    </div>

    @endsection
    @section('scripts')    
    <script>
     $(document).ready(function () {

        headerChangeColor();
        
        let atraksiBudaya = @json($atraksiBudaya);
        addCard(atraksiBudaya,$("#top-atraction .cards-atraksi"));
        carousellButton($("#top-atraction .cards-atraksi"),$("#top-atraction .prev-btn"),$("#top-atraction .next-btn") );
        clickCardContent("#top-atraction .cards-atraksi .card", "/TappaknusadetailAtraction");

        let festivalBudaya = @json($festivalBudaya);
        addCard(festivalBudaya,$("#top-festival .cards-atraksi"));
        carousellButton($("#top-festival .cards-atraksi"),$("#top-festival .prev-btn"),$("#top-festival .next-btn") );
        clickCardContent("#top-festival .cards-atraksi .card", "/TappaknusadetailAtraction");
        
        clickCardContent(".culture-card", "/Tapaknusaculture");

        function responsiveHero(){

            function applyResponsiveHero(){             
                if ($(window).width() > $(window).height()){//laptop
                    $(".hero-culture ").css({"min-height":"70vh"});
                }else{
                    if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                        $(".hero-culture ").css({"min-height":"45vh"});
                    }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                        $(".hero-culture ").css({"min-height":"40vh"});
                    }
                }

            }

            applyResponsiveHero();
            $(window).on("resize",applyResponsiveHero);
            }

        responsiveHero();


        function selectLocation(){
            $(".location-choices").click(function(){
                $(".location-modal").toggle();
            });

            $(".close-location").click(function(){
                $(".location-modal").hide();
            });

            $(document).click(function (e) {
                if (!$(e.target).closest(".location-choices, .locationSelect").length) {
                    $(".location-modal").hide();
                }
            });

        }

        selectLocation();


        

        let searchQueryItem = @json($location) || "";
        $(".location-title").text(searchQueryItem);

        let heroCultureImage = searchQueryItem.toLowerCase().replace(/\s+/g, '-');

        // Gunakan Blade untuk menginsert URL base aman, kemudian gabungkan dengan variabel JS
        var heroCultureImageUrl = "https://tapaknusa-images.imgix.net/" + heroCultureImage + "-hero-image.jpg";

        // Mengubah background CSS menggunakan URL yang aman
        $(".hero-culture").css("background", `url("${heroCultureImageUrl}") no-repeat center center/cover`);


        $(".hero-culture .btn-search").click(function () {
            let searchQuery = $(".hero-culture #search-input").val();
            let tempDate = $(" .hero-culture .date-picker").val();
                $(".hero-culture .date-picker").val("");
                $(".hero-culture .search-container input").val("");

                window.location.href = "/TapaknusasearchResult?find=" + encodeURIComponent(searchQuery) + "&status=all&tanggal=" + tempDate;

            
        });

        
        
    });  

    </script>
    @endsection