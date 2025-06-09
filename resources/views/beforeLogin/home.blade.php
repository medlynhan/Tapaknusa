
    @extends('beforeLogin.app')    
    @section('title', 'Tapaknusa')
    @section('content')

        <!-- Hero Section -->
        <section class="hero" >
            <div class="fadeInDown page-padding-left-right  ">
                <h2 class="heading-font">Indonesia Lebih dari yang Kamu Tahu</h2>
                <p class="big-text-font">Temukan 1001 Keajaiban Nusantara</p>
            
                <div class="search-box black medium-text-font fadeInDown delay-4s ">
                    <div class="search-container">
                        <!--Search-->
                        <input type="text" id="search-input" class=" black medium-text-font" placeholder="Cari atraksi/festival budaya...">
                        <!--Dropdown list-->  
                        <div class="date-picker-container">
                            <input type="date" class="date-picker" >
                            <p class="this-day-date black"></p>
                            <div class="calendar-icon">
                                <i class="fi fi-br-calendar calendar-icon big-text-font black"></i>
                            </div>
                        </div>
                    </div>
                    <!--Submit button-->
                    <button  class="btn-search medium-text-font">Cari</button>
                </div>
            </div>
        </section>


        <!--Advertisment--> 
        <section class="advertisment-section page-padding-left-right as-click">
            <p class="superbig-text-font black">
                <i class="fi fi-rr-time-quarter-to supersmall-heading-font black"></i> Segera Berlangsung
            </p>    
            <img  class="festival-trend-advertisment" src="{{ asset('asset/festival-promo.png') }}" alt="Festival terdekat">
        </section>

        <!-- Explore Atraction Section -->
        <section class="page-padding-left-right" id="atraction" >
            <div class="explore-content">
                <p class="superbig-text-font black">
                    <i class="fi fi-rs-castle supersmall-heading-font black"></i> Atraksi Unik
                </p>            
                <p class="medium-text-font black">Dari Sabang sampai Merauke, ada ribuan pengalaman yang nunggu buat kamu rasain.</p>
                <!--Carousell-->

                <div class="carousel">
                    <button class="prev-btn"><i class="fas fa-chevron-left white big-text-font"></i></button>
                    <div class="content">
                        <div class="cards-atraksi medium-text-font"></div>
                    </div>
                    <button class="next-btn"><i class="fas fa-chevron-right  white big-text-font"></i></button>
                </div>

                <div class="explore-addition">
                    <div class="lihat-lanjut">
                        <a href="{{ route('Tapaknusaatraction') }}" class="medium-text-font red"><p>Lihat Lebih Lanjut →</p></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Festival Section -->
        <section class="page-padding-left-right" id="festival">
            <div class="explore-content">
                <p class="superbig-text-font black">
                    <i class="fi fi-rr-stage-concert supersmall-heading-font black"></i> Festival Trending
                </p>            
                <p class="medium-text-font black" > Jangan Lewatkan Festival yang akan berlangsung</p>
                <div class="carousel">
                    <button class="prev-btn"><i class="fas fa-chevron-left white big-text-font"></i></button>
                    <div class="content">
                        <div class="cards-festival medium-text-font"></div>
                    </div>
                    <button class="next-btn"><i class="fas fa-chevron-right  white big-text-font"></i></button>
                </div>
                <div class="explore-addition">
                    <div class="lihat-lanjut">
                        <a href="{{ route('Tapaknusafestival') }}" class="medium-text-font red"><p>Lihat Lebih Lanjut →</p></a>
                    </div>
                </div>
            </div>
        </section>



        <!--Destination Section-->
        <section class="culture-section page-padding-left-right">
            <div class="culture-header">
                <h2 class="superbig-text-font black">
                    <i class="fi fi-rr-earth-americas supersmall-heading-font black"></i>
                    <span class="highlight2">100+</span> 
                    Aktivitas Budaya
                </h2>
                <p class="big-text-font black">dapat kamu temui di berbagai destinasi</p>
            </div>
        
            <div class="culture-grid thin">
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

        </section>
        


        <section class="points-section page-padding-left-right">
           <img class="ws-click" src="{{ asset('asset/kuishome.png') }}" alt="Wawasan Nusantara">
        </section>
        
        <section class="faq-section page-padding-left-right">
            <h2 class="heading-font superbig-text-font black">
                <i class="fi fi-br-message-question supersmall-heading-font black"></i> FAQS
            </h2>
            <div class="faq-container">
                <!-- Categories Sidebar -->
                <div class="faq-categories big-text-font">
                    <ul>
                        <li class="active" data-category="ticket">1. Ticket Pemesanan</li>
                        <li data-category="wawasan">2. Wawasan Nusantara</li>
                        <li data-category="atraksi">3. Atraksi & Festival</li>
                        <li data-category="kemitraan">4. Kemitraan</li>
                    </ul>
                </div>
        
                <!-- Konten FAQ -->
                <div class="faq-content">
                    <!-- Kategori 1: Ticket Pemesanan -->
                    <div class="faq-group active" id="ticket">
                        <div class="faq-item ">
                            <div class="faq-question medium-text-font black ">
                                <span>Bagaimana cara membeli tiket atraksi dan festival di website ini?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Kamu bisa memilih atraksi atau festival yang ingin dikunjungi, lalu lakukan pembayaran langsung melalui website.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Apakah ada diskon jika membeli tiket di sini dibanding beli langsung?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer ">
                                <p>Ya! Kami bekerja sama dengan mitra lokal untuk memberikan promo eksklusif bagi pengguna website.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Kategori 2: Wawasan Nusantara -->
                    <div class="faq-group" id="wawasan">
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Apa itu Wawasan Nusantara?</span>
                                <span class="faq-toggle superbig-text-font black ">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Wawasan Nusantara adalah program gamifikasi yang memungkinkan kamu mengumpulkan poin dari membaca artikel, mengikuti kuis, atau membeli tiket.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Bagaimana cara mendapatkan poin?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Kamu bisa mendapatkan poin dengan menyelesaikan kuis, membaca artikel budaya, atau membeli tiket wisata.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Kategori 3: Atraksi & Festival -->
                    <div class="faq-group" id="atraksi">
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Apa perbedaan antara atraksi dan festival?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Atraksi adalah tempat wisata yang bisa dikunjungi kapan saja, sementara festival adalah acara budaya yang diadakan pada waktu tertentu.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Apakah ada rekomendasi festival yang wajib dikunjungi?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Ya! Beberapa festival unik seperti Karapan Sapi, Festival Kasada, dan Pasola bisa menjadi pilihan menarik.</p>
                            </div>
                        </div>
                    </div>
        
                    <!-- Kategori 4: Kemitraan -->
                    <div class="faq-group" id="kemitraan">
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Bagaimana jika saya memiliki usaha wisata dan ingin bekerja sama dengan website ini?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Kami selalu terbuka untuk kemitraan! Hubungi kami melalui icon "Mitra & Kolaborasi".</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question medium-text-font black">
                                <span>Apakah website ini hanya untuk wisatawan lokal atau juga untuk turis asing?</span>
                                <span class="faq-toggle superbig-text-font black">+</span>
                            </div>
                            <div class="faq-answer">
                                <p>Website ini bisa digunakan oleh siapa saja yang ingin mengenal lebih tentang Indonesia ! </p>
                            </div>
                        </div>
                    </div>
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
               
                let allAttractions = @json($allAttractions);
                let allFestivals = @json($allFestivals);
                
                console.log(allAttractions); // Debug data
                console.log(allFestivals);  // Debug data



                addCard(allFestivals, $(".cards-festival"));
                addCard(allAttractions, $(".cards-atraksi"));


                carousellButton($(".cards-atraksi"),$("#atraction .prev-btn"),$("#atraction .next-btn") );
                carousellButton($(".cards-festival"),$("#festival .prev-btn"),$("#festival .next-btn"));

                clickCardContent(".card", "/TappaknusadetailAtraction");
                clickCardContent(".culture-card", "/Tapaknusaculture");
                clickCardContent(".footer-links-text", "/Tapaknusaculture");
                


                $(document).on("click", ".need-to-login-button", function () {
                    $("#loginModal").css({ display: "flex" });
                });

                    
                // Toggle FAQ ditekan
                $(".faq-question").click(function () {
                    let parent = $(this).parent();

                    if (parent.hasClass("active")) {
                        parent.removeClass("active");
                        parent.find(".faq-answer").slideUp(300);
                        parent.find(".faq-toggle").text("+");
                    } else {
                        $(".faq-item").removeClass("active");
                        $(".faq-answer").slideUp(300);
                        $(".faq-toggle").text("+");

                        parent.addClass("active");
                        parent.find(".faq-answer").slideDown(300);
                        parent.find(".faq-toggle").text("-");
                    }
                });

                // Animasi saat kategori FAQ dipilih
                $(".faq-categories li").click(function () {
                    $(".faq-categories li").removeClass("active");
                    $(this).addClass("active");

                    let category = $(this).data("category");

                    $(".faq-group.active").fadeOut(400, function () {
                        $(".faq-group").removeClass("active");
                        $("#" + category).fadeIn(400).addClass("active");
                    });
                });



                function responsiveHero(){

                    function applyResponsiveHero(){             
                        if ($(window).width() > $(window).height()){//laptop
                            $(".hero").css({"min-height":"100vh"});
                        }else{
                            if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                                $(".hero").css({"min-height":"60vh"});
                            }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                                $(".hero").css({"min-height":"40vh"});
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


                
                $(".hero .btn-search").click(function () {
                    let searchQuery = $(".hero #search-input").val();
                    let tempDate = $(".hero .date-picker").val();

                    console.log("tanggal" + tempDate);

                    $(".hero .date-picker").val("");
                    $(".hero .search-container input").val("");


                    window.location.href = "/TapaknusasearchResult?find=" + encodeURIComponent(searchQuery) + "&status=all&tanggal=" + tempDate;
                    
                });

            });  

            needToLoginFirst(".as-click");
            needToLoginFirst(".ws-click");

        </script>
    @endsection
