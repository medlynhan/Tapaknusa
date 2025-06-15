@extends('afterLogin.app')    
@section('title', 'Tapaknusa')

@section('content')

    <!-- Hero Section -->
    <section class="hero hero-mitra page-padding-left-right">
        <button class="back-btn" onclick="window.history.back()"><i class="fi fi-br-angle-left big-text-font"></i></button>
        <div class="hero-content animated fadeInDown">
            <h2 class="heading-font title ">Bergabung Bersama Kami</h2>
            <p class="big-text-font">Mari bersama-sama mempromosikan wisata dan festival budaya Indonesia.</p>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="partnership page-padding-left-right fadeInDown page-padding-top">
        <h2 class="sub-heading-font black">Jadilah Mitra & <span class="highlight5">Kolaborasi</span>   </h2>
        <p class="medium-text-font black">
            Sejak pertama kali berdiri, kami telah berkomitmen untuk mempromosikan keindahan dan kekayaan budaya Indonesia melalui berbagai platform. 
            Dengan pengalaman yang telah teruji dan berbagai penghargaan yang kami raih, kami terus berusaha menjadi mitra terpercaya dalam mengangkat destinasi wisata dan festival budaya Indonesia ke mata dunia.
        </p>
        <p class="medium-text-font black">
            Kami menyadari bahwa Indonesia memiliki potensi yang luar biasa dalam hal pariwisata dan budaya.
            Dari Sabang sampai Merauke, setiap daerah memiliki ciri khas yang dapat memukau para wisatawan lokal dan mancanegara. 
            Melalui kolaborasi yang solid, kami ingin bersama-sama mengangkat keunikan daerah dan memperkenalkan pesona nusantara kepada audiens global.
        </p>
        <div class="achievement">
            <img src="{{ secure_asset('asset/penghargaan1.jpg') }}" alt="">
            <img src="{{ secure_asset('asset/penghargaan2.png') }}" alt="">
            <img src="{{ secure_asset('asset/penghargaan3.png') }}" alt="">

        </div>
    </section>

    <section class=" partnership page-padding-left-right page-padding-top page-padding-bottom fadeInDown">
        <h2 class="sub-heading-font black">Punya Pertanyaan ?</h2>
        <p class="big-text-font black">Mau berdiskusi dengan tim kami untuk keteranagn lebih lanjut? Segera Hubungi Kami</p>
        <p class="medium-text-font black">
            Jika Anda memiliki tempat wisata atau festival budaya yang ingin dipromosikan, kami dengan senang hati mengundang Anda untuk berkolaborasi dengan kami. 
            Dengan menggunakan berbagai strategi pemasaran dan pendekatan yang terintegrasi, kami siap untuk membantu meningkatkan eksposur destinasi Anda dan memberikan dampak positif yang signifikan bagi pariwisata di Indonesia.
        </p>
        <div class="contact-info">
            <p class="medium-text-font black"><i class="fa-solid fa-envelope"></i> Email: <a href="mailto:mitra@tapaknusa.com">mitra@tapaknusa.com</a></p>
            <p class="medium-text-font black"><i class="fa-solid fa-phone"></i> WhatsApp: <a href="https://wa.me/6281234567890">+62 812-3456-7890</a></p>
            <p class="medium-text-font black"><i class="fa-solid fa-map-marker-alt"></i> Alamat: Jalan Jalur Sutra No.9 Jakarta, Indonesia</p>
        </div>
    </section>

@endsection

@php  
     $hideHeader = true;
@endphp


    @section('scripts')
        <script>
            $(document).ready(function () {

                function responsiveHero(){

                    function applyResponsiveHero(){             
                        if ($(window).width() > $(window).height()){//laptop
                            $(".hero-mitra ").css({"min-height":"70vh"});
                        }else{
                            if ($(window).width() * 1.5 >  ($(window).height())){ //ipad
                                $(".hero-mitra ").css({"min-height":"45vh"});
                            }else if ($(window).width() * 1.5  < ($(window).height())){ //phone
                                $(".hero-mitra ").css({"min-height":"40vh"});
                            }
                        }

                    }

                    applyResponsiveHero();
                    $(window).on("resize",applyResponsiveHero);
                    }

                responsiveHero();

            });  

        </script>
    @endsection