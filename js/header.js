function loginRegister() {
    $(".btn-login").click(function () {
        $(".toggle-btn").removeClass("active");
    });

    $(".btn-signin").click(function () {
        $(".toggle-btn").addClass("active");
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

    function changeBackgroundColor(){
        if ($(window).scrollTop() == (0/100) * window.innerHeight){
            $("header").css({"background-color": "transparent"});  
            $(".container2").css({"border-bottom":"0.1em solid rgb(255, 255, 255)"});     
        }else{
            $("header").css({"background-color": "var(--black)"});
            $(".container2").css({"border-bottom":"none"});
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
    $(window).on("scroll", changeBackgroundColor);
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
                window.location.href = "searchResult.html?find=" + encodeURIComponent(searchQuery) + "&status=all&tanggal=" + tempDate;
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



            window.location.href = "searchResult.html?find=" + encodeURIComponent(searchQuery) + "&status=all&tanggal=" + tempDate;

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









 

