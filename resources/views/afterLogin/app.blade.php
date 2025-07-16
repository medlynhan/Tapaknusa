<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tapaknusa')</title>
    <!--css-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="icon"       href="{{asset('asset/island.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/animation.css')}}">
    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/headerFooter.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">


    <!--css atraction-->
    <link rel="stylesheet" href="{{asset('css/page/atractionFestival.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/cart.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/detailAtraction.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/patner.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/pay.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/searchResult.css')}}">
    <link rel="stylesheet" href="{{asset('css/page/profile.css')}}">

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

</head>
<body class="medium-text-font">
    <!--Header-->
    @if (!isset($hideHeader) || !$hideHeader)
    <header class="fadeInDown">
        <!--Container 1-->
        <div class="container1 page-padding-left-right">
            <a class="heading-font logo" href="{{ route('home') }}"><h1 class="superbig-text-font dancing-script-font logo-text"></span>Tapaknusa</h1></a>
            
            <div class="header-search-box black medium-text-font">
                <div class="header-search-container">
                    <!--Search-->
                    <input type="text" id="header-search-input" class=" black medium-text-font" placeholder="Cari atraksi...">
                    <!--Dropdown list-->  
                    <div class="header-date-picker-container">
                        <input type="date" class="header-date-picker" onClick="change">
                        <p class="header-this-day-date black"></p>
                        <i class="fi fi-br-calendar big-text-font black"></i>
                    </div> 
                </div>
                <!--Submit button-->
                <button class="header-btn-search medium-text-font">Cari</button>
            </div>



            <nav class="big-text-font icon">
                <ul class="hover-color">
                    <li><a href="{{ route('patner') }}"><i class="fa-regular fa-handshake icon-header"></i></a></li>
                    <li><a href="{{ route('cart') }}"><i class="fa fa-cart-shopping icon-header"></i></a></li>            
                </ul>
            </nav>
            <!--Login SignIn Button-->
            <div class="toggle-btn toggle-profile-btn">
                <button class="btn-profile active medium-text-font"><i class="fi fi-rr-circle-user big-text-font"></i></button>
                 <p class="btn-profile-text">{{ Auth::check() && Auth::user()->name ? Auth::user()->name : 'User' }}</p>
            </div>
            <!--Burger Menu Header Icon-->
            <div class="burger-menu big-text-font">
                <i class="fa-solid fa-bars medium-text-font black burger-icon"></i>
            </div>    
        </div>
        <!--Container 2-->
        <div class="container2 page-padding-left-right">
            <nav>
                <ul>
                    <li><a class="medium-text-font header-menu-text" href="{{ route('atraction') }}">Atraksi</a></li>
                    <li><a class="medium-text-font header-menu-text" href="{{ route('festival') }}">Festival</a></li>
                    <li><a class="medium-text-font header-menu-text" href="{{ route('home') }}">Wawasan Nusantara</a></li>
                </ul>
            </nav>         
        </div>    
    </header>


    <!--Burger Menu Open-->
    <div class="burger-modal" id="burgerModal">
        <div class="burger-menu-open"> 
            <div class="burger-menu-open-title">
                <h2 class="small-heading-font">Menu</h2>
                
                <span class="close-burger" id="closeBurger">&times;</span>
            </div>

            <div class="burger-menu-open-list">
                <p><a class="medium-text-font" href="{{ route('profile') }}">Profile</a></p>
                <p><a class="medium-text-font" href="{{ route('cart') }}">Keranjang Belanja</a></p>
                <p><a class="medium-text-font" href="{{ route('atraction') }}">Atraksi</a></p>
                <p><a class="medium-text-font" href="{{ route('festival') }}">Festival</a></p>
                <p><a class="medium-text-font" href="{{ route('home') }}">Wawasan Nusantara</a></p>
                <p><a class="medium-text-font" href="{{ route('patner') }}">Mitra & Kolaborasi</a></p>


                <form action="/logout" method="GET" class="logout-menu">
                    <button type="submit" class="medium-text-font logout-btn ">Logout</button>
                </form>  

            </div>  

        </div>
    </div>



    <!-- Login Section -->
    <div class="login-modal" id="loginModal">
        <div class="login-content">
            <span class="close" id="closeLogin">&times;</span>
            <h2 class="small-heading-font black">Selamat datang kembali!</h2>
            <p class="small-text-font">Temukan 1001 keindahan, budaya, dan sejarah di berbagai sudut Indonesia </p>
            
            <form id="loginForm" action="{{ route('login') }}" method="POST" class="small-text-font">
                @csrf
                <input id="login-username" name="username" class="small-text-font black" type="text" placeholder="Username" required>
                <input id="login-password" name="password" class="small-text-font black" type="password" placeholder="Password" required>
                
                <span id="login-error" class="supersmall-text-font red"></span>

                <button type="submit" class="btn-login-content small-text-font">Submit</button>
                <p class="small-text-font">Belum punya akun ? <span class="needToRegister small-text-font bold red">Sign Up</span></p>
            </form>
        </div>
    </div>
    

    <!-- SignUp Section -->
    <div class="signUp-modal" id="signUpModal">
        <div class="signUp-content">
            <span class="close" id="closeSignUp">&times;</span>
            <h2 class="small-heading-font black">Hi, Sahabat Nusa!</h2>
            <p class="small-text-font">Temukan 1001 keindahan, budaya, dan sejarah di berbagai sudut Indonesia </p>
            
            <form id="registerForm"  action="{{ route('register') }}" method="POST">
                @csrf
                <input id="register-username" name="username" class="small-text-font black" type="text" placeholder="Username" required>
                <span id="register-username-error" class="supersmall-text-font red"></span>

                <input id="register-email" name="email" class="small-text-font black" type="email" placeholder="Email" required>
                <span id="register-email-error" class="supersmall-text-font red"></span>

                <input id="register-password" name="password" class="small-text-font black" type="password" placeholder="Password" required>
                <span id="register-password-error" class="supersmall-text-font red"></span>

                <input id="register-confirmPassword" name="confirmPassword" class="small-text-font black" type="password" placeholder="Confirm Password" required>
                <span id="register-confirmPassword-error" class="supersmall-text-font red"></span>

                <button type="submit" class="btn-signUp-content small-text-font" disabled>Submit</button>
                <p class="small-text-font">Sudah punya akun ? <span class="needToLogin small-text-font bold red">Login</span></p>
            </form>
        </div>
    </div>
    @endif

    <div >
        @yield('content') 
    </div>
 
    @if (!isset($hideFooter) || !$hideFooter)
    <!-- Footer -->
    <footer class="footer-section ">
        <div class="footer-container page-padding-left-right">
            <div class="footer-content">
                <h2 class="superbig-text-font thin black">Let's, Get in touch!</h2>
                <div  class="footer-social-media">
                    <i class="fi fi-brands-instagram big-text-font black"></i><i class="fi fi-brands-facebook big-text-font black"></i><i class="fi fi-brands-tik-tok big-text-font black"></i>
                </div>
                <p class="medium-text-font black">helo@tapaknusa.com</p>
            </div>
            <div class="footer-categories"> 
                <div class="footer-links">
                    <ul>
                        <li><a class="medium-text-font bold">Atraksi</a></li>
                        <li><a class="footer-links-text medium-text-font"  data-attribute="Yogyakarta"  >Yogyakarta</a></li>
                        <li><a class="footer-links-text medium-text-font" data-attribute="Pulau Bali">Bali</a></li>
                        <li><a class="footer-links-text medium-text-font" data-attribute="Jawa Timur">Jawa Timur</a></li>
                        <li><a class="footer-links-text medium-text-font" data-attribute="Sumatera">Sumatera</a></li>
                        <li><a class="footer-links-text medium-text-font"data-attribute="Kalimantan">Kalimantan</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a class="medium-text-font bold">Festival</a></li>
                        <li><a class="footer-links-text medium-text-font"  data-attribute="Yogyakarta"  >Yogyakarta</a></li>
                        <li><a class="footer-links-text medium-text-font" data-attribute="Pulau Bali">Bali</a></li>
                        <li><a class="footer-links-text medium-text-font" data-attribute="Jawa Timur">Jawa Timur</a></li>
                        <li><a class="footer-links-text medium-text-font" data-attribute="Sumatera">Sumatera</a></li>
                        <li><a class="footer-links-text medium-text-font"data-attribute="Kalimantan">Kalimantan</a></li>
                    </ul>
                </div>                       
                <div class="footer-links">
                    <ul>
                        <li><a class="medium-text-font bold">Lainnya</a></li>
                        <li><a class="medium-text-font" href="{{ route('culture') }}">Wawasan Nusantara</a></li>
                        <li><a class="medium-text-font" href="{{ route('patner') }}">Mitra & Kolaborasi</a></li>
                        <li><a class="medium-text-font" href="{{ route('patner') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom ">
            <p class="medium-text-font black">© 2025 Tapaknusa. Made in Tangerang, Indonesia</p>
        </div>
    </footer>
    @endif

    <script src="{{ asset('js/jquery-1.7.1.min.js') }}"></script>
    <script src="{{ asset('js/header.js') }}"></script>
    <script src="{{ asset('js/searchBox.js') }}"></script>
    <script src="{{ asset('js/carousell.js') }}"></script>


    <script>
        $(document).ready(function () {
        goToSignUpPage();


        @if ($errors->any())
            // Ambil pesan kesalahan dan tampilkan di span dengan id login-error
            $('#login-error').text("{{ $errors->first('message') }}");
            if ($(window).width() <= 1199) {
                $(".burger-modal").css({"display":"flex"});
                $(".burger-menu-open").animate({"right":"0%"},500);
            }

            setTimeout(function() {
                $('.login-modal').css({ "display" : "flex" });
            }, 800);
            
        @endif

        // Register form input event
        $('#registerForm input').on('input', function() {
            let valid = $('#registerForm input[name="username"]').val().length > 0 &&
                        $('#registerForm input[name="email"]').val().length > 0 &&
                        $('#registerForm input[name="password"]').val().length >= 8 &&
                        $('#registerForm input[name="confirmPassword"]').val().length >= 8 &&
                        $('#birthMonth').val() && $('#birthDay').val() && $('#birthYear').val();
            
            let auth = registerAuthentication();
            if (!valid || !auth) {
                console.log("gak valid");
            } else {
                console.log("valid");
                $('.btn-signUp-content').prop('disabled', false);
            }
        });

        
        let successRegistration = registerAuthentication();
        if (successRegistration == true) {
            console.log("valid");
            $('.btn-signUp-content').prop('disabled', false);
        }

        headerScroll();
        loginRegister();

        menuPopUp();

        dateCek($(".date-picker"),$(".this-day-date"));
        dateCek($(".header-date-picker"),$(".header-this-day-date"));

        searchBoxHeader();
        hideContainer2();


        $(".logout-menu").on("click", function () {
            $.ajax({
                url: '{{ route('logout') }}', // URL ke route logout
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'  // CSRF token untuk keamanan
                },

                success: function(response) {
                    // Redirect setelah logout berhasil
                    window.location.href = '{{ route('Tapaknusahome') }}'; // Mengarahkan ke halaman home setelah logout
                },
                error: function(xhr, status, error) {
                    console.log('Logout gagal: ' + error);
                }
            });
        });
        
        $(".toggle-btn").on("click", function () {
             window.location.href = "/profile";
        });

        
    });  


    </script>
    @yield('scripts')
    
</body>
</html>