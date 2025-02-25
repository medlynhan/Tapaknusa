
    $(".btn-login").click(function () {
        $(".toggle-btn").removeClass("active");
    });

    $(".btn-signin").click(function () {
        $(".toggle-btn").addClass("active");
    });
    


    //login
    $("#openLogin").click(function () {
        setTimeout(function () {
            $("#loginModal").fadeIn();
            $("#loginModal").css("display", "flex");
        }, 300);
    });


    // Ketika tombol close (X) diklik
    $("#closeLogin").click(function () {
        $("#loginModal").fadeOut();
    });

    // Jika klik di luar modal
    $(window).click(function (event) {
        if ($(event.target).is("#loginModal")) {
            $("#loginModal").fadeOut();
        }
    });



    //signin
    $("#openSignin").click(function () {
        setTimeout(function () {
        $("#signinModal").fadeIn();
        $("#signinModal").css("display","flex");
        },300);
    });

    // Ketika tombol close (X) diklik
    $("#closeSignIn").click(function () {
        $("#signinModal").fadeOut();
    });


    $(".btn-closing").click(function () {
        setTimeout(function () {
            $("#loginModal").fadeIn();
            $("#loginModal").css("display", "flex");
        }, 300);
    });
    // Jika klik di luar modal
    $(window).click(function (event) {
        if ($(event.target).is("#signinModal")) {
            $("#signInModal").fadeOut();
        }
    });

    $(window).bind("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("header").addClass("scrolled"); // Tambahkan class saat discroll
        } else {
            $("header").removeClass("scrolled"); // Hapus class jika kembali ke atas
        }
    });

    //header

    $(window).bind("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("header").addClass("scrolled"); // Tambahkan class saat discroll
        } else {
            $("header").removeClass("scrolled"); // Hapus class jika kembali ke atas
        }
    });  

    $(document).ready(function () {
        $(".burger-menu").click(function () {
            $(".burger-menu-open").slideToggle();
        });
    
        $(window).resize(function () {
            if (window.innerWidth > 1000) {
                $(".burger-menu-open").hide();
            }
        });


        // Jika pengguna mengklik di luar menu burger, tutup menu
        $(document).click(function (event) {
            if (!$(event.target).closest(".burger-menu, .burger-menu-open").length) {
                $(".burger-menu-open").slideUp();
            }
        });


        $(".burger-menu-open #openLogin").click(function () {
            $("#loginModal").fadeIn().css("display", "flex");
        });
    
        // Membuka modal sign in dari menu burger
        $(".burger-menu-open #openSignin").click(function () {
            $("#signinModal").fadeIn().css("display", "flex");
        });
    
        // Menutup modal login saat klik di luar modal
        $(document).click(function (event) {
            if ($(event.target).is("#loginModal")) {
                $("#loginModal").fadeOut();
            }
        });
    
        // Menutup modal sign in saat klik di luar modal
        $(document).click(function (event) {
            if ($(event.target).is("#signinModal")) {
                $("#signinModal").fadeOut();
            }
        });
    
        // Menutup modal dengan tombol close
        $("#closeLogin").click(function () {
            $("#loginModal").fadeOut();
        });
    
        $("#closeSignIn").click(function () {
            $("#signinModal").fadeOut();
        });



    });


    

    

    
    
    
    
