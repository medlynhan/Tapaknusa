function loginRegister() {
    $(".btn-login").click(function () {
        $(".toggle-btn").removeClass("active");
        $(".btn-signin").css({"color":"var(--black)"});
        $(".btn-login").css({"color":"var(--white)"});
    });

    $(".btn-signin").click(function () {
        $(".toggle-btn").addClass("active");
        $(".btn-signin").css({"color":"var(--white)"});
        $(".btn-login").css({"color":"var(--black)"});
    });
    

    function loginSignUpModals(openSelector, closeSelector, modalSelector) {
        // Buka modal
        $(document).on("click", openSelector, function () {
            setTimeout(function () {
                $(modalSelector).fadeIn().css({ display: "flex" });
            }, 300);
        });

        // Tombol close
        $(document).on("click", closeSelector, function () {
            $(modalSelector).fadeOut();
        });

        // Klik di luar modal (tutup modal)
        $(document).on("click", function (event) {
            if ($(event.target).is(modalSelector)) {
                $(modalSelector).fadeOut();
            }
        });
    }

    loginSignUpModals("#openLogin", "#closeLogin", "#loginModal");
    loginSignUpModals("#openSignUp", "#closeSignUp", "#signUpModal");
}


function goToSignUpPage(){
    $(document).on("click", ".needToRegister", function () {

        if ($("#loginModal").css("display") === "flex" ){
            $("#signUpModal").css({ display: "flex" });
            $("#loginModal").css({ display: "none" });
             
        }
        
        
    });

    $(document).on("click", ".needToLogin", function () {
        // if ($("#loginModal").css(display) === "flex" ){
        //      $("#loginModal").fadeOut().css({ display: "none" });
        // }
        if ($("#signUpModal").css("display") === "flex" ){
            $("#loginModal").css({ display: "flex" });
            $("#signUpModal").css({ display: "none" });
             
        }
        
    });
}

function headerScroll() {
    $(".header-search-box").css({ display: "none" });

    function updateHeaderLayout() {
        $(".header-search-box").css({ display: "none" });
        if (window.matchMedia("(min-width: 1200px)").matches) {
            $(".logo").css({ "display" : "flex" });
            $("header .container1").css({ "grid-template-columns": "4fr 0.4fr 0.5fr" });

        }else {
            $(".logo").css({ "display" : "flex" });
            $("header .container1").css({ "grid-template-columns": "95% 5%" });
        }
    }

    function checkScroll() {
        if ($(window).scrollTop() > (60 / 100) * window.innerHeight) {
            $(".header-search-box").css({ display: "flex" });
            if (window.matchMedia("(min-width: 1200px)").matches) {
                $("header .container1").css({ "grid-template-columns": "1.3fr 2.7fr 0.4fr 0.5fr" });
                $(".logo").css({ "display" : "flex" });
            }else if (window.matchMedia("(min-width: 300px)").matches && window.matchMedia("(max-width: 799px)").matches){
                $("header .container1").css({ "grid-template-columns": "95% 5%" });
                $(".logo").css({ "display" : "none" });
            } else if (window.matchMedia("(min-width: 800px)").matches){
                $("header .container1").css({ "grid-template-columns": "25% 67% 5%" });
                $(".logo").css({ "display" : "flex" });
            }
        } else {
            updateHeaderLayout();
        }
    }

    updateHeaderLayout();
    checkScroll();

    $(window).on("resize", checkScroll);
    $(window).on("scroll", checkScroll);
}

function headerChangeColor(){
    function changeBackgroundColor(){
        if ($(window).scrollTop() == (0/100) * window.innerHeight){
            $("header").css({"background-color": "transparent"});  
            $(".container2").css({"border-bottom":"0.1em solid var(--white)"}); 
            $(".container1").css({"border-bottom":"0.1em solid var(--white)"});  
            $(".logo-text").css({"color": "var(--white) "});
            $(".icon-header").css({"color": "var(--white)"});
            $(".header-menu-text").css({"color": "var(--white) "});
            $(".container1").css({"border-bottom":"0.1em solid var(--white)"});
            $(".header-search-container").css({"border":"0.1em solid transparent"});
            $(".container2").css({"border-bottom":"0.1em solid var(--white)"});  
            $(".burger-icon").css({"color": "var(--white)"});
             $(".btn-signin").css({"color": "var(--white)"});
             $(".btn-login").css({"color": "var(--white)"});
        }else{
            // $("header").css({"background-color": "var(--black)"});
            $("header").css({"background-color": "var(--white)"});
            $(".logo-text").css({"color": "var(--black)"});
            $(".icon-header").css({"color": "var(--black)"});
            $(".header-menu-text").css({"color": "var(--black)"});
            $(".container1").css({"border-bottom":"0.1em solid var(--grey)"});
            $(".header-search-container").css({"border": "0.1em solid var(--black)"});
            $(".container2").css({"border-bottom":"none"});
            $(".btn-signin").css({"color": "var(--red)"});
            $(".burger-icon").css({"color": "var(--black)"});
             $(".btn-signin").css({"color": "var(--black)"});
             $(".btn-login").css({"color": "var(--white)"});
            
        }
    }
    changeBackgroundColor();
    $(window).on("scroll", changeBackgroundColor);
}

function menuPopUp(){
    $(".burger-menu").click(function () {
        $(".burger-modal").css({"display":"flex"});
        $(".burger-menu-open").animate({"right":"0%"},500);
    });

    $(window).click(function (event) {
        if ($(event.target).is($(".burger-modal"))) {
            $(".burger-menu-open").animate({"right":"-200%"},500,function(){
                $(".burger-modal").fadeOut();
                $(".burger-modal").css({display:"none"}); 
            });
        }
    });

    $(window).click(function (event) {
        if ($(event.target).is($(".close-burger"))) {
            $(".burger-menu-open").animate({"right":"-200%"},500,function(){
                $(".burger-modal").fadeOut();
                $(".burger-modal").css({display:"none"}); 
            });

        }
    });

}

function searchBoxHeader(){
    $(".header-btn-search").click(function () {
        let searchQuery = $("#header-search-input").val();
        if(searchQuery === "" || /^[^a-zA-Z]+$/.test(searchQuery)){
            $("#header-search-input").val("");
            $("#header-search-input").attr("placeholder","Kotak Pencarian tidak boleh kosong");

        }else{
            let tempDate = $(".header-date-picker").val();

            console.log("tanggal" + tempDate);

            $(".header-date-picker").val("");
            $(".header-search-container input").val("");



            $(".search-modal").animate({"top":"0vh"},500,function(){
                window.location.href = "/TapaknusasearchResult?find=" + encodeURIComponent(searchQuery) + "&status=all&tanggal=" + tempDate;
            });

        }
        
    });
}



function headerScroll2() {
    $(".header-search-box").css({ display: "none" });

    function updateHeaderLayout() {
        $(".header-search-box").css({ display: "none" });
        if (window.matchMedia("(min-width: 1200px)").matches) {
            $(".logo").css({ "display" : "flex" });
            $("header .container1").css({ "grid-template-columns": "4fr 0.4fr 0.5fr" });

        }else {
            $(".logo").css({ "display" : "flex" });
            $("header .container1").css({ "grid-template-columns": "95% 5%" });
        }
    }

    function checkScroll() {
        if ($(window).scrollTop() > (60 / 100) * window.innerHeight) {
            $(".header-search-box").css({ display: "flex" });
            if (window.matchMedia("(min-width: 1200px)").matches) {
                $("header .container1").css({ "grid-template-columns": "1.3fr 2.7fr 0.4fr 0.5fr" });
                $(".logo").css({ "display" : "flex" });
            }else if (window.matchMedia("(min-width: 300px)").matches && window.matchMedia("(max-width: 799px)").matches){
                $("header .container1").css({ "grid-template-columns": "95% 5%" });
                $(".logo").css({ "display" : "none" });
            } else if (window.matchMedia("(min-width: 800px)").matches){
                $("header .container1").css({ "grid-template-columns": "25% 67% 5%" });
                $(".logo").css({ "display" : "flex" });
            }
        } else {
            updateHeaderLayout();
        }
    }

    updateHeaderLayout();
    checkScroll();

    $(window).on("resize", checkScroll);
    $(window).on("scroll", checkScroll);
}


function menuPopUp(){
    $(".burger-menu").click(function () {
        $(".burger-modal").css({"display":"flex"});
        $(".burger-menu-open").animate({"right":"0%"},500);
    });

    $(window).click(function (event) {
        if ($(event.target).is($(".burger-modal"))) {
            $(".burger-menu-open").animate({"right":"-200%"},500,function(){
                $(".burger-modal").fadeOut();
                $(".burger-modal").css({display:"none"}); 
            });
        }
    });

    $(window).click(function (event) {
        if ($(event.target).is($(".close-burger"))) {
            $(".burger-menu-open").animate({"right":"-200%"},500,function(){
                $(".burger-modal").fadeOut();
                $(".burger-modal").css({display:"none"}); 
            });

        }
    });

}





function hideContainer2(){
    if (window.matchMedia("(min-width: 500px)").matches){
        $(".container2").css({"display":"flex"});
    }else{
        $(".container2").css({"display":"none"});
    }
}

function resetLoginRegisterErrorMessage(){
    $('#login-username-error').text('');
    $('#login-password-error').text('');
    $('#register-username-error').text('');
    $('#register-email-error').text('');
    $('#register-password-error').text('');
    $('#register-confirmPassword-error').text('');
}

function registerAuthentication() {
    let username = $('#registerForm input[name="username"]').val();
    let email = $('#registerForm input[name="email"]').val();
    let password = $('#registerForm input[name="password"]').val();
    let confirmPassword = $('#registerForm input[name="confirmPassword"]').val();

    // Reset error messages
    resetLoginRegisterErrorMessage();

    let isValid = true;

    if (username) { // Only check when the username has value
        if (username.length > 255) {
            $('#register-username-error').text('Username maksimal 255 karakter');
            isValid = false;
        }
    } else {
        $('#register-username-error').text('');
    }

    if (email) { // Only check when email has value
        let emailPattern = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            $('#register-email-error').text('Format email tidak valid');
            isValid = false;
        }
    } else {
        $('#register-email-error').text('');
    }

    if (password) { // Only check when password has value
        if (password.length < 8) {
            $('#register-password-error').text('Password minimal 8 karakter');
            isValid = false;
        }
    } else {
        $('#register-password-error').text('');
    }

    if (confirmPassword) { // Only check when confirmPassword has value
        if (confirmPassword !== password) {
            $('#register-confirmPassword-error').text('Konfirmasi password tidak sesuai');
            isValid = false;
        }
    } else {
        $('#register-confirmPassword-error').text('');
    }

    return isValid;
}















 

