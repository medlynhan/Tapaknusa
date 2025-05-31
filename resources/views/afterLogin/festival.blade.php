@extends('afterLogin.app')    
@section('title', 'Tapaknusa')
@section('content')

    <!-- Hero Section -->
    <section class="hero-festival" >
        <div class="hero-content fadeInDown page-padding-left-right  ">
            <h2 class="sub-heading-font">Temukan Festival Budaya</h2>
        
            <div class="search-box black medium-text-font fadeInDown delay-4s ">
                <div class="search-container">
                    <!--Search-->
                    <input type="text" id="search-input" class=" black medium-text-font" placeholder="Cari festival...">
                    <!--Dropdown list-->  
                    <div class="date-picker-container">
                        <input type="date" class="date-picker" onClick="change">
                        <p class="this-day-date black"></p>
                        <div class="calendar-icon">
                            <i class="fi fi-br-calendar calendar-icon big-text-font black"></i>
                        </div>
                    </div>
                </div>
                <div class="location-ddl fadeInDown">
               
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
                                <img src="{{ asset('asset/yogyakarta.jpg') }}" alt="Yogyakarta" loading="lazy">
                                <div class="label">Yogyakarta</div>
                                <div class="info">21 Aktivitas</div>
                            </div>
                            <div class="culture-card card2" data-attribute="Sumatera">
                                <img src="{{ asset('asset/sumatera.jpg') }}" alt="Sumatera" loading="lazy">
                                <div class="label">Sumatera</div>
                                <div class="info ">13 Aktivitas</div>
                            </div>
                            <div class="culture-card card3" data-attribute="Pulau Bali">
                                <img src="{{ asset('asset/pulau-bali.jpg') }}" alt="Bali" loading="lazy">
                                <div class="label">Bali</div>
                                <div class="info">26 Aktivitas</div>
                            </div>
                            <div class="culture-card card4" data-attribute="Kalimantan">
                                <img src="{{ asset('asset/kalimantan.jpg') }}" alt="Kalimantan" loading="lazy">
                                <div class="label">Kalimantan</div>
                                <div class="info">15 Aktivitas</div>
                            </div>
                            <div class="culture-card card5" data-attribute="Jawa Timur">
                                <img src="{{ asset('asset/jawa-timur.jpg') }}" alt="Jawa Timur" loading="lazy">
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
        </div>
    </section>

    <!--Advertisment--> 
    <section class="advertisment-section page-padding-left-right">
        <p class="superbig-text-font black">
            <i class="fi fi-rr-time-quarter-to supersmall-heading-font black"></i> Segera Berlangsung
        </p>    
        <a href="{{route('home')}}"><img src="asset/festival-promo.png" alt="Festival terdekat"></a>
    </section>

    <!-- Explore Festival Section -->
    <section class="page-padding-left-right" id="fyp-festival" >
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

    <section class="page-padding-left-right" id="trending-festival" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-arrow-trend-up supersmall-heading-font black"></i> Festival Trending
            </p>            
            <p class="medium-text-font black">Jangan lewatkan festival-festival yang sedang trending</p>
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

    <section class="page-padding-left-right" id="top-5-festival" >
        <div class="explore-content">
            <p class="superbig-text-font black">
                <i class="fi fi-br-review supersmall-heading-font black"></i> 5 Top Festival
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
                <img src="asset/yogyakarta.jpg" alt="Yogyakarta" loading="lazy">
                <div class="label">Yogyakarta</div>
                <div class="info">21 Aktivitas</div>
            </div>
            <div class="culture-card card2" data-attribute="Sumatera">
                <img src="asset/sumatera.jpg" alt="Sumatera" loading="lazy">
                <div class="label">Sumatera</div>
                <div class="info ">13 Aktivitas</div>
            </div>
            <div class="culture-card card3" data-attribute="Pulau Bali">
                <img src="asset/pulau-bali.jpg" alt="Bali" loading="lazy">
                <div class="label">Bali</div>
                <div class="info">26 Aktivitas</div>
            </div>
            <div class="culture-card card4" data-attribute="Kalimantan">
                <img src="asset/kalimantan.jpg" alt="Kalimantan" loading="lazy">
                <div class="label">Kalimantan</div>
                <div class="info">15 Aktivitas</div>
            </div>
            <div class="culture-card card5" data-attribute="Jawa Timur">
                <img src="asset/jawa-timur.jpg" alt="Jawa Timur" loading="lazy">
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

        addCard($("#fyp-festival .cards-atraksi"),"festival",0,0,0,7);
        carousellButton($("#fyp-festival .cards-atraksi"),$("#fyp-festival .prev-btn"),$("#fyp-festival .next-btn") );
        clickCardContent("#fyp-festival .cards-atraksi .card", "detailAtraction");

        addCard($("#trending-festival .cards-atraksi"),"festival",0,0,5,wisataBudaya.length);
        carousellButton($("#trending-festival .cards-atraksi"),$("#trending-festival .prev-btn"),$("#trending-festival .next-btn") );
        clickCardContent("#trending-festival .cards-atraksi .card", "detailAtraction");

        addCard($("#top-5-festival .cards-atraksi"),"festival",0,0,7,12);
        carousellButton($("#top-5-festival .cards-atraksi"),$("#top-5-festival .prev-btn"),$("#top-5-festival .next-btn") );
        clickCardContent("#top-5-festival .cards-atraksi .card", "detailAtraction");
   
        clickCardContent(".culture-card", "culture");

        function responsiveHero(){

            function applyResponsiveHero(){             
                if ($(window).width() > $(window).height()){//laptop
                    $(".hero-festival ").css({"min-height":"70vh"});
                }else{
                    if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                        $(".hero-festival ").css({"min-height":"45vh"});
                    }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                        $(".hero-festival ").css({"min-height":"40vh"});
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

        $(".hero-festival .btn-search").click(function () {
            let searchQuery = $(".hero-festival #search-input").val();
            let tempDate = $(".hero-festival .date-picker").val();
                $(".hero-festival .date-picker").val("");
                $(".hero-festival .search-container input").val("");
                window.location.href = "/searchResult?find=" + encodeURIComponent(searchQuery) + "&status=festival&tanggal=" + tempDate;
                
                 
            
        });

        
        
    });  

    </script>
@endsection