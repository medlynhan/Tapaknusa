 let totalCoins = 0;
    let currentDay = 1;
    let isClaimed = false; // Menandakan apakah reward sudah diklaim

    $('#collect-coins').click(function () {
        if (!isClaimed) { // Hanya bisa klaim sekali per hari
            const dailyReward = parseInt($(`#day${currentDay}`).text());
            totalCoins += dailyReward;
            $('#total-coins').text(totalCoins);
            $(`#day${currentDay}`).addClass('collected');
            currentDay++;
            isClaimed = true; // Set agar tidak bisa diklaim lagi

            // Tampilkan animasi popup
            $('#reward-popup').fadeIn().css({ transform: 'scale(1)', opacity: 1 });
            setTimeout(function () {
                $('#reward-popup').fadeOut().css({ transform: 'scale(0)', opacity: 0 });
            }, 2000);

            if (currentDay > 7) {
                currentDay = 1; 
            }

            // Nonaktifkan tombol setelah klaim
            $('#collect-coins').text('Reward Sudah Diklaim').attr('disabled', true).css({ backgroundColor: '#ccc' });
        }
    });

    $('#kuis-link').click(function (e) {
    e.preventDefault(); // Mencegah link agar tidak langsung dialihkan
    let image = $(this).find('img');
    image.animate({ transform: 'scale(1.1)', opacity: 0 }, 500, function () {
        window.location.href = 'kuis.html'; // Alihkan setelah animasi selesai
    });
});

    var currentQuestion = 1;
    var correctAnswers = {
        1: "A", // Jawaban benar untuk soal 1
        2: "C", // Jawaban benar untuk soal 2
        3: "B", // Jawaban benar untuk soal 3
        4: "A", // Jawaban benar untuk soal 4
        5: "D"  // Jawaban benar untuk soal 5
    };

    // Fungsi untuk memperbarui tampilan total koin
    function updateTotalCoins() {
        $('#totalCoins').text(totalCoins);
    }

    // Fungsi untuk menampilkan soal berikutnya
    function showNextQuestion() {
        // Sembunyikan soal saat ini
        $('#question' + currentQuestion).fadeOut(300, function() {
            currentQuestion++;
            if (currentQuestion <= 5) {
                // Tampilkan soal berikutnya dengan efek animasi fadeIn
                $('#question' + currentQuestion).fadeIn(300);
            } else {
                // Jika sudah selesai, tampilkan hasil
                $('#result').fadeIn(300);
                $('#finalCoins').text(totalCoins);
            }
        });
    }

    // Fungsi saat pengguna memilih jawaban
    $('.question ul li').click(function() {
        var selectedAnswer = $(this).attr('data-answer');

        // Cek jawaban benar dan tambahkan koin jika benar
        if (selectedAnswer === correctAnswers[currentQuestion]) {
            totalCoins += 200;
            updateTotalCoins();
        }

        // Tampilkan soal berikutnya
        showNextQuestion();
    });


    function kembaliKeHalamanUtama() {
        // Ganti window.location.href ke halaman utama atau halaman lainnya
        window.location.href = "wawasannusantara.html"; // Sesuaikan dengan nama halaman utama Anda
    }
    

    $('#total-coins').text(totalCoins);


    $(document).ready(function () {
        // Cek apakah user sudah login dari localStorage
        let user = JSON.parse(localStorage.getItem("user")) || null;
    
        function updateUserInfo() {
            if (user) {
                $(".toggle-btn").hide(); // Sembunyikan tombol login/sign in
                $("#user-info").removeClass("hidden");
                $("#username").text(user.name);
                $("#totalPoints").text(user.points + " Point");
            }
        }
    
        updateUserInfo(); // Panggil saat halaman dimuat
    
        // Login klik event
        $("#openLogin").click(function () {
            $("#loginModal").fadeIn().css("display", "flex");
        });
    
        $("#closeLogin").click(function () {
            $("#loginModal").fadeOut();
        });
    
        // Simulasi login sukses
        $(".submit-btn").click(function (event) {
            event.preventDefault(); // Cegah reload
    
            // Simulasi data user setelah login (Gantilah dengan API backend)
            user = {
                name: "Madeline Handoyo",  // Gantilah dengan nama dari backend
                points: 100  // Gantilah dengan data dari backend
            };
    
            localStorage.setItem("user", JSON.stringify(user)); // Simpan user ke localStorage
    
            updateUserInfo(); // Perbarui UI
    
            $("#loginModal").fadeOut();
        });
    });
    