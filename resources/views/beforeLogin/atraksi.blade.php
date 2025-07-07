@extends('beforeLogin.app')    
@section('title', 'Tapaknusa')
@section('content')

    <!-- Hero Section -->
    <section class="hero-atraction" >
        <div class="hero-content fadeInDown page-padding-left-right  ">
            <h2 class="sub-heading-font">Temukan Atraksi Budaya</h2>
        
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

    <section class="page-padding-left-right" id="fyp-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-face-smile-hearts supersmall-heading-font black"></i> Khusus Buat Kamu
            </p>            
            <p class="medium-text-font black">Rekomendasi yang kami sediakan khusus untuk kamu</p>
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

    <section class="page-padding-left-right" id="trending-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-arrow-trend-up supersmall-heading-font black"></i> Atraksi Trending
            </p>            
            <p class="medium-text-font black">Jangan lewatkan atraksi-atraksi yang sedang trending</p>
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

    <section class="page-padding-left-right" id="top-5-atraction" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-review supersmall-heading-font black"></i> 5 Top Atraksi
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
 

    <!--Destination Section-->
    <section class="culture-section page-padding-left-right thin">
        <div class="culture-header">
            <h2 class="superbig-text-font black">
                <i class="fi fi-rr-earth-americas supersmall-heading-font black"></i>
                Jelajahi Berbagai Destinasi
            </h2>
            <p class="medium-text-font black">Berbagai destinasi telah menunggumu</p>
        </div>
    
        <div class="culture-grid">
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
                <img src=" https://tapaknusa-images.imgix.net/kalimantan.jpg" alt="Kalimantan" loading="lazy">
                <div class="label">Kalimantan</div>
                <div class="info">15 Aktivitas</div>
            </div>
            <div class="culture-card card5" data-attribute="Jawa Timur">
                <img src="https://tapaknusa-images.imgix.net/jawa-timur.jpg" alt="Jawa Timur" loading="lazy">
                <div class="label">Jawa Timur</div>
                <div class="info">9 Aktivitas</div>
            </div>
        </div>

    </section>

    <div class="search-modal"></div>

@endsection

@section('scripts')
    <script>
     $(document).ready(function () {

        headerChangeColor();

        atraksiTrending = @json($atraksiTrending);
        atraksiTop5 =   @json($atraksiTop5);
        atraksiRecommendation =@json($atraksiRecommendation);

        addCard(atraksiRecommendation,$("#fyp-atraction .cards-atraksi"));
        carousellButton($("#fyp-atraction .cards-atraksi"),$("#fyp-atraction .prev-btn"),$("#fyp-atraction .next-btn") );
        clickCardContent("#fyp-atraction .cards-atraksi .card", "detailAtraction");

        addCard(atraksiTrending,$("#trending-atraction .cards-atraksi"));
        carousellButton($("#trending-atraction .cards-atraksi"),$("#trending-atraction .prev-btn"),$("#trending-atraction .next-btn") );
        clickCardContent("#trending-atraction .cards-atraksi .card", "detailAtraction");

        addCard(atraksiTop5,$("#top-5-atraction .cards-atraksi"));
        carousellButton($("#top-5-atraction .cards-atraksi"),$("#top-5-atraction .prev-btn"),$("#top-5-atraction .next-btn") );
        clickCardContent("#top-5-atraction .cards-atraksi .card", "detailAtraction");
   
        clickCardContent(".culture-card", "/Tapaknusaculture");


        function responsiveHero(){

            function applyResponsiveHero(){             
                if ($(window).width() > $(window).height()){//laptop
                    $(".hero-atraction ").css({"min-height":"70vh"});
                }else{
                    if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                        $(".hero-atraction ").css({"min-height":"45vh"});
                    }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                        $(".hero-atraction ").css({"min-height":"40vh"});
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


        

        $(".hero-atraction .btn-search").click(function () {
            let searchQuery = $(".hero-atraction #search-input").val();
            let tempDate = $(" .hero-atraction .date-picker").val();
                $(".hero-atraction .date-picker").val("");
                $(".hero-atraction .search-container input").val("");

                window.location.href = "/TapaknusasearchResult?find=" + encodeURIComponent(searchQuery) + "&status=atraksi&tanggal=" + tempDate;
            
        });

        
        
    });  

    </script>
@endsection