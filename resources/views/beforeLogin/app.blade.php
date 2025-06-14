<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tapaknusa')</title>
    <!--css-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
    <style>
            @import url('https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css');
@import url('https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css');

header {
    background: transparent;
    position: fixed;
    width: 100vw;
    top: 0;
    display: flex;
    justify-content: space-between;
    flex-direction: column;
    z-index: 900;
    left: 0;
    top: 0;
    transition: background-color 0.4s ease-in-out; 
    box-shadow: 0px 4px 6px rgba(0,0,0,0.5);

} 

.container1 {
    display: grid;
    grid-template-columns: 4fr 0.4fr 0.5fr;
    align-items: center;
    min-width: 100vw ;
    width: 100%;
    gap: 1em;
    padding: 1em 3em;
    border-bottom: 0.1em solid rgb(255, 255, 255); 
    
}
 
.container2 {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    min-width: 100vw ;
    width: 100%;
    padding: 0.5em 3em;
    border-bottom: 0.1em solid  rgb(255, 255, 255);
}


header.scrolled{
    background: rgb(51, 51, 51,1);
}





/*Nav*/
nav {
    display: flex; 
    justify-content: space-between; 
    align-items: flex-start; 
    background-color: transparent; 
    
}


.container2 nav{
    min-width: 100% ;
}

nav ul {
    list-style: none; 
    display: flex; 
    gap: 2.3rem; 
    padding: 0;
}

nav ul li a {
    text-decoration: none; 
    color: white;
    font-weight: 400;
    transition: background-color 0.4s ease-in-out; 
    transition: color 0.4s ease-in-out; 
}


.container1 nav ul li a:hover {
    color: rgba(169, 67, 76); 
   
}

.container2 nav ul li a:hover {
    background-color: rgba(169, 67, 76, 0.7); 
   
}



/*Login Header*/
.toggle-btn{
    display: flex;
    align-items: center;
    border: 0.15em solid var(--red);
    border-radius: 2rem;
    overflow: hidden;
    background: transparent;
    width: 14em;
    height: 2em;
    position: relative;
}


.toggle-profile-btn{
    background-color: var(--red);
    display: flex;
    align-items: center;
    justify-items: center;
    border: 0.15em solid var(--red);
    border-radius: 2rem;
    overflow: hidden;
    width: 14em;
    height: 2em;
    position: relative;
   
}

.toggle-btn::before {
    content: "";
    width: 7em;
    height: 2em;
    background: var(--red);
    border-radius: 2rem;
    position : absolute;
    transition: transform 0.3s ease-in-out;
    transform: translateX(0);
    
}


.toggle-btn.active::before {
    transform: translateX(7em);
   
}

.btn-login, .btn-signin, .btn-profile, .btn-name{
    color: white;
    border: none;
    cursor: pointer;
    background-color: transparent;
    position: relative;
    padding: 0.2em 2em;
}

 .btn-profile, .btn-name{
    padding: 0.2em 0.7em;
 }

 .btn-profile-text{
    z-index: 500;
 }




/*Burger Menu*/
.burger-menu, .burger-menu-open{
    display: none;
}



.header-search-box{
    padding-top:0em;
    width: 90%;
    display: grid;
    grid-template-columns: 1fr 0.2fr;
    gap: 1em;
    justify-items: center;
    justify-content: center;
    align-items: center;
    align-items: center ;
}

.header-search-container{
    width: 100%;
    height: 2.3em;
    display: grid;
    grid-template-columns: 1.5fr 0.3fr;
    background-color: var(--white);
    border: 0.1em solid transparent;
    border-radius: 2em;

}


.header-search-box input{
    padding: 0em;
    padding-left: 1em;
    width: 90%;
    border: none;
    border-radius: 2em;
    outline: none;
    z-index: 1000;
}

.header-date-picker-container{
    width: 100%;
    height: 100%;
    border-radius: 2em;
    padding-left: 2em;
    padding-right: 1em;
    background: none;
    position: relative;
    display: flex;
    justify-items: flex-end;
    align-items: center;
    gap: 2em;
    
    
}

.header-date-picker{
    border: 1em  solid var(--black);
    opacity:0;
    z-index: 500;
    position: absolute;
    top: 50;
    left: 0;
    
}

.header-calendar-icon{
    z-index: 300;
    display: flex;
    justify-items: center;
    align-items: center;
}



.header-btn-search{
    padding: 0.4em 0.9em;
    background: var(--red);
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 2em;
    transition: all 0.3s ease-in-out;
}

.header-btn-search:hover{
    transform: scale(1.05);
}


/*Footer*/

footer{
    position: relative;
    bottom: 0px;
}

.footer-section {
    background: var(--black);
    color: var(--white);
    text-align: left;
    padding-top: 3em;
    width: 100vw;
    
}

.footer-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-bottom: 2rem;
    justify-content: start;
    justify-items: start;
    align-content: center;
    width: 100vw;


}

.footer-social-media {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 2em;
    margin: auto;
    padding: 0.5rem;

}


.footer-links ul {
    list-style: none;
    gap: 2.3rem; 
}

.footer-links ul li a {
    transition: color 0.3s ease-in-out;
}

.footer-links ul li a:hover {
    background-color: rgba(169, 67, 76, 0.7); 
}

.footer-categories{
    display: grid;
    width: 100%;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 5em;
    justify-content: space-between;

}

.footer-bottom {
    border-top: 0.1em solid rgb(255, 255, 255,0.7); 
    text-align: center;
    padding: 1em 0rem;
}



/*Login Register*/
.login-modal, .signUp-modal , .information-modal, .information-need-to-login, .information-already-added{
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(51, 51, 51, 0.5); 
    backdrop-filter: blur(5px);
    align-items: center;
    justify-content: center;
}


.search-modal {
    display: flex;
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 100vh;
    width: 100%;
    height: 100%;
    background: var(--cream); 
    align-items: center;
    justify-content: center;
}

.login-content, .signUp-content, .information-content{
    background: var(--white);
    padding: 2rem;
    width: 22rem;
    border-radius: 0.5em;
    text-align: center;
    position: relative;
    animation: fadeIn 0.3s ease-in-out;
    color: var(--black);
}

.login-content p, .signUp-content p{
    margin-top: 1em;
    color: var(--grey);
}

/* Tombol close (X) */
.close {
    position: absolute;
    top: 0em;
    right: 0.5em;
    font-size: 2em;
    cursor: pointer;
    color: var(--grey);
}

.close-burger {
    font-size: 2em;
    cursor: pointer;
    color: var(--white);
}

.login-content input, .signUp-content input{
    width: 100%;
    padding: 1em;
    margin: 1em 0;
    border: 0.1em solid #ccc;
    border-radius: 0.5em;
}

.birthday-inputs {
    display: flex;
    gap: 0.5em;
}

.birthday-inputs input {
    width: 30%;
}

.btn-login-content, .btn-signUp-content {
    width: 100%;
    padding: 0.5em;
    background: var(--red);
    color: var(--white);
    border: none;
    border-radius: 2rem;
    cursor: pointer;
}

.btn-login-content:hover, .btn-signUp-content:hover  {
    background: var(--grey);
}


.needToRegister, .needToLogin{
    text-decoration: underline;
    cursor: pointer;
} 

@media only screen and (min-width: 1600px) {
}

@media only screen and (max-width: 1599px) and (min-width: 1400px) {
}

@media only screen and (max-width: 1399px) and (min-width: 1200px) {
}

@media only screen and (max-width: 1199px){
    .toggle-btn{
        display : none;
    }
    .icon{
        display : none;
    }

    .burger-menu{
        display : flex;
        width: 100%;
        font-size: 1.5rem;
    }

    .footer-container {
        display: grid;
        grid-template-columns: unset;
        grid-template-rows: 1fr 1fr;
    }

    .burger-modal{
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(51, 51, 51, 0.5); 
        backdrop-filter: blur(5px);
        align-items: center;
        justify-content: center;   
    }

    .burger-menu-open{
        display : flex;
        flex-direction: column;
        position: absolute;
        background-color: var(--red);
        top: 0%;
        right: -200%;
        width: 30em;
        height: 100vh;
        color: var(--black);
        z-index: 1000;
        padding: 5em;
    }

    .login-signup-menu{
        margin-top: 4em;
        width: 100%;
        border-top: 0.1em var(--white) solid; 
        display: grid;
        grid-template-columns: 2fr 1fr;
        justify-content: end;
        justify-items: end;
        align-items: center;
        padding: 1em;
        text-decoration: underline var(--white);
        
    }

    .logout-menu{
        margin-top: 4em;
        width: 100%;
        border-top: 0.1em var(--white) solid; 
        display: grid;
        justify-content: end;
        justify-items: end;
        align-items: center;
        padding: 1em;
        text-decoration: underline var(--white);
    }


    .burger-menu-open-title{
        display : grid;
        grid-template-columns: 90% 10%;
        border-bottom: 0.1em var(--white) solid;   
    }

    .burger-menu-open-list{
        padding-top: 3em ;
        display : flex;
        flex-direction: column;
        gap:2em;
        text-align: start;
        cursor: pointer;

    }  



    



    

}

@media only screen and (max-width: 767px) {
}

@media only screen and (max-width: 499px) {
    .container2{
        width: 100vw;
    }

    .footer-categories{
        gap: 1.5em;
    }

    footer{
        position: relative;
        top: 100px;
    }
}
    </style>
</head>
<body class="medium-text-font">
    <!--Header-->
    @if (!isset($hideHeader) || !$hideHeader)
    <header class="fadeInDown">
        <!--Container 1-->
        <div class="container1 page-padding-left-right">
            <a class="heading-font logo" href="{{ route('Tapaknusahome') }}"><h1 class="big-text-font"><span class="big-text-font"><i class="fi fi-rr-island-tropical"></i></span>apaknusa</h1></a>
            
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
                    <li><a href="{{ route('Tapaknusapatner') }}"><i class="fa-regular fa-handshake"></i></a></li>
                    <li><a class="ct-login" ><i class="fa fa-cart-shopping"></i></a></li>            
                </ul>
            </nav>
            <!--Login SignIn Button-->
            <div class="toggle-btn">
                <button class="btn-login active medium-text-font" id="openLogin">Login</button>
                <button class="btn-signin medium-text-font" id="openSignUp">SignUp</button>
            </div>
            <!--Burger Menu Header Icon-->
            <div class="burger-menu big-text-font">
                <i class="fa-solid fa-bars medium-text-font"></i>
            </div>    
        </div>
        <!--Container 2-->
        <div class="container2 page-padding-left-right">
            <nav>
                <ul>
                    <li><a class="medium-text-font" href="{{ route('Tapaknusaatraction') }}">Atraksi</a></li>
                    <li><a class="medium-text-font" href="{{ route('Tapaknusafestival') }}">Festival</a></li>
                    <li><a class="medium-text-font need-to-login-first wn-login">Wawasan Nusantara</a></li>
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
            <p><a class="medium-text-font ct-menu-login" href="#">Keranjang Belanja</a></p>
            <p><a class="medium-text-font" href="{{ route('Tapaknusaatraction') }}">Atraksi</a></p>
            <p><a class="medium-text-font" href="{{ route('Tapaknusafestival') }}">Festival</a></p>
            <p><a class="medium-text-font wn-menu-login" >Wawasan Nusantara</a></p>
            <p><a class="medium-text-font" href="{{ route('Tapaknusapatner') }}">Mitra & Kolaborasi</a></p>


                <div  class="login-signup-menu">
                    <p  class="medium-text-font " id="openLogin" >Login</p>
                    <p  class="medium-text-font " id="openSignUp" >SignUp</p>
                </div>

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
                <h2 class="superbig-text-font thin">Let's, Get in touch!</h2>
                <div  class="footer-social-media">
                    <i class="fi fi-brands-instagram big-text-font"></i><i class="fi fi-brands-facebook big-text-font"></i><i class="fi fi-brands-tik-tok big-text-font"></i>
                </div>
                <p class="medium-text-font">helo@tapaknusa.com</p>
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
                        <li><a class="medium-text-font " >Wawasan Nusantara</a></li>
                        <li><a class="medium-text-font" href="{{ route('Tapaknusapatner') }}">Mitra & Kolaborasi</a></li>
                        <li><a class="medium-text-font" href="{{ route('Tapaknusapatner') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom ">
            <p class="medium-text-font">© 2025 Tapaknusa. Made in Tangerang, Indonesia</p>
        </div>

        <div class="information-need-to-login" id="informationNeedToLoginModal">
            <div class="information-content">
                <p class="medium-text-font black">Untuk melanjutkan, silakan login terlebih dahulu.</p>
        </div>
    </div>
    </footer>
    @endif
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

        needToLoginFirst(".wn-login");
        needToLoginFirst(".wn-menu-login");
        needToLoginFirst(".ct-login");
        needToLoginFirst(".ct-menu-login");

        
    });  


    </script>
    @yield('scripts')
    
</body>
</html>