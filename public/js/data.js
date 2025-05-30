const wisataBudaya = [
    {
        title: "Festival Erau Kertanegara",
        destination: "Kalimantan",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/erau-kertanegara.png",
        rating: 4.8,
        reviews: [
            { user: "Dewi S.", rating: 5, comment: "Acaranya sangat meriah dan penuh budaya!" },
            { user: "Rizky A.", rating: 4, comment: "Seru, tapi agak ramai!" }
        ],
        startPrice: "30.000,00",
        address: "Kota Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur",
        schedule: "2025-05-26",
        description: "Festival budaya terbesar di Kalimantan Timur yang diwariskan oleh Kesultanan Kutai Kartanegara. Acara ini menampilkan berbagai pertunjukan seni tradisional, upacara adat, hingga kompetisi perahu naga di Sungai Mahakam. Wisatawan dapat menyaksikan ritual sakral seperti Belimbur, di mana masyarakat saling menyiram air sebagai simbol pembersihan diri dan keberkahan.",
        ticketTypes: [
            {
                title: "Tiket Masuk Festival",
                price: 30000,
                category: "Umum (Semua Usia)",
                description: "Tiket masuk untuk mengikuti seluruh rangkaian acara Festival Erau, termasuk pertunjukan seni, budaya, dan ritual adat.",
                facilities: ["Akses ke festival", "Zona kuliner", "Penjukan seni"]
            }
        ]
    },
    {
        title: "Workshop Membatik",
        destination: "Yogyakarta",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/workshop-membatik.jpg",
        status: "atraksi",
        rating: 4.8,
        reviews: [
            { user: "Faisal H.", rating: 5, comment: "Membatiknya seru! Pengrajin sangat ramah." },
            { user: "Lina W.", rating: 4, comment: "Lumayan, tapi prosesnya cukup lama." }
        ],
        startPrice: "Rp 75.000,00",
        address: "Jl. Wijilan No.23, Panembahan, Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta",
        schedule: "Setiap hari | 09.00 - 15.00 WIB",
        description: "Pelajari seni membatik langsung dari pengrajin batik terbaik di Yogyakarta. Dalam workshop ini, peserta akan belajar menggambar motif batik, menggunakan canting, hingga pewarnaan kain. Hasil karya batik yang dibuat dapat dibawa pulang sebagai oleh-oleh.",
        ticketTypes: [
            {
                title: "Tiket Workshop Individu",
                price: 75000,
                category: "Dewasa (13-99 tahun)",
                description: "Tiket untuk individu yang ingin belajar membatik dari awal hingga selesai.",
                facilities: ["Bahan kain & pewarna", "Bimbingan pengrajin", "Karya bisa dibawa pulang"]
            },
            {
                title: "Tiket Workshop Grup (min 5 orang)",
                price: 300000,
                category: "Grup (Minimal 5 orang)",
                description: "Paket belajar membatik untuk grup dengan harga lebih ekonomis.",
                facilities: ["Bahan kain & pewarna", "Bimbingan pengrajin", "Minuman gratis"]
            }
        ]
    },
    {
        title: "Desa Penglipuran",
        destination: "Pulau Bali",
        cart:0,
        list:0,
        status: "atraksi",
        image: "asset/gambar-atraksi/desa-penglipuran.png",
        rating: 4.9,
        reviews: [
            { user: "Budi T.", rating: 5, comment: "Desanya indah, cocok untuk foto-foto!" },
            { user: "Rina M.", rating: 4, comment: "Tempatnya keren, tapi agak ramai di akhir pekan." }
        ],
        startPrice: "Rp 25.000,00",
        address: "Desa Penglipuran, Kecamatan Bangli, Kabupaten Bangli, Bali",
        schedule: "Setiap hari | 08.00 - 17.00 WITA",
        description: "Desa adat ini dikenal sebagai desa terbersih di dunia. Pengunjung dapat menikmati arsitektur rumah tradisional Bali, interaksi dengan masyarakat setempat, dan keindahan alam yang masih sangat asri. Desa ini juga sering digunakan sebagai lokasi festival budaya dan acara adat khas Bali.",
        ticketTypes: [
            {
                title: "Tiket Wisatawan Domestik",
                price: 25000,
                category: "WNI (Semua Usia)",
                description: "Tiket masuk khusus warga negara Indonesia untuk menikmati keindahan Desa Penglipuran.",
                facilities: ["Akses masuk kawasan", "Spot foto", "Pemandu wisata opsional"]
            },
            {
                title: "Tiket Wisatawan Mancanegara",
                price: 50000,
                category: "WNA (Semua Usia)",
                description: "Tiket masuk khusus wisatawan asing yang ingin menjelajahi keunikan Desa Penglipuran.",
                facilities: ["Akses masuk kawasan", "Spot foto", "Tur budaya"]
            }
        ]
    },
    {
        title: "Festival Lompat Batu",
        destination: "Sumatra",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/lompat-batu-nias.jpg",
        status: "festival",
        rating: 4.9,
        reviews: [
            { user: "Ardi P.", rating: 5, comment: "Luar biasa! Tradisi yang sangat unik dan menarik." },
            { user: "Santi W.", rating: 4, comment: "Sangat menarik, tapi butuh waktu lama menunggu giliran atraksi." }
        ],
        startPrice: "Rp 50.000,00",
        address: "Desa Bawomataluo, Kecamatan Fanayama, Kabupaten Nias Selatan, Sumatera Utara",
        schedule: "2025-09-20",
        description: "Festival yang menampilkan ritual lompat batu setinggi lebih dari 2 meter, yang hanya bisa dilakukan oleh pemuda Nias yang sudah mencapai kedewasaan. Wisatawan bisa menyaksikan langsung kehebatan para pelompat batu serta menikmati tarian perang khas Nias yang heroik dan penuh semangat.",
        ticketTypes: [
            {
                title: "Tiket Masuk Festival",
                price: 50000,
                category: "Dewasa (13-99 tahun)",
                description: "Tiket untuk menyaksikan atraksi lompat batu di arena utama.",
                facilities: ["Akses ke arena utama", "Panduan sejarah lompat batu"]
            }
        ]
    },
    {
        title: "Tradisi Pasola",
        destination: "Sumatera",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/pasola-sumba.png",
        rating: 4.7,
        reviews: [
            { user: "Fikri T.", rating: 5, comment: "Sangat keren, pertunjukan yang menegangkan!" },
            { user: "Mira S.", rating: 4, comment: "Bagus, tapi agak sulit untuk mendapatkan tempat terbaik." }
        ],
        startPrice: "Rp 100.000,00",
        address: "Desa Kodi, Lamboya, Kabupaten Sumba Barat, Nusa Tenggara Timur",
        schedule: "2025-07-12",
        description: "Pasola adalah tradisi perang tanding antar dua kelompok penunggang kuda yang melemparkan tombak kayu ke arah lawan. Tradisi ini merupakan bagian dari kepercayaan Marapu dan menjadi ajang syukuran untuk panen yang melimpah. Wisatawan dapat merasakan kemeriahan suasana serta keunikan budaya yang masih kental di Pulau Sumba.",
        ticketTypes: [
            {
                title: "Tiket Masuk Pasola",
                price: 100000,
                category: "Dewasa (13-99 tahun)",
                description: "Tiket untuk menyaksikan pertunjukan Pasola langsung dari arena utama.",
                facilities: ["Akses ke arena utama", "Tempat duduk terbatas"]
            }
        ]
    },
    {
        title: "Pulau Kakaban",
        destination: "Kalimantan",
        cart:0,
        list:0,
        status: "atraksi",
        image: "asset/gambar-atraksi/pulau-kakaban.png",
        rating: 4.9,
        reviews: [
            { user: "Aldi P.", rating: 5, comment: "Pengalaman berenang bersama ubur-ubur tak menyengat benar-benar luar biasa!" },
            { user: "Rina K.", rating: 4, comment: "Pulau ini sangat indah, tapi akses ke sini cukup sulit." }
        ],
        startPrice: "Rp 50.000,00",
        address: "Kepulauan Derawan, Kabupaten Berau, Kalimantan Timur",
        schedule: "Setiap hari | 08.00 - 17.00 WITA",
        description: "Pulau unik dengan danau air payau di tengahnya yang dihuni oleh ubur-ubur tidak menyengat, memungkinkan pengunjung berenang bersama mereka.",
        ticketTypes: [
            {
                title: "Tiket Masuk Pulau",
                price: 50000,
                category: "Semua Usia",
                description: "Tiket untuk masuk ke Pulau Kakaban dan menikmati keindahan ekosistem uniknya.",
                facilities: ["Akses masuk pulau", "Spot foto", "Area berenang"]
            }
        ]
    },
    {
        title: "Danau Labuan Cermin",
        destination: "Kalimantan",
        status: "atraksi",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/danau-labuan-cermin.png",
        rating: 4.8,
        reviews: [
            { user: "Andi R.", rating: 5, comment: "Airnya jernih banget, seolah perahu melayang di atas air!" },
            { user: "Siti A.", rating: 4, comment: "Pemandangan indah, tapi perlu bawa makanan sendiri karena fasilitas terbatas." }
        ],
        startPrice: "Rp 25.000,00",
        address: "Biduk-Biduk, Kabupaten Berau, Kalimantan Timur",
        schedule: "Setiap hari | 08.00 - 16.00 WITA",
        description: "Danau dengan air yang sangat jernih hingga dasar terlihat jelas, menawarkan pengalaman snorkeling di perairan tenang dengan dua rasa, tawar di permukaan dan asin di kedalaman.",
        ticketTypes: [
            {
                title: "Tiket Masuk Danau",
                price: 25000,
                category: "Semua Usia",
                description: "Tiket masuk ke Danau Labuan Cermin, termasuk akses snorkeling.",
                facilities: ["Akses ke danau", "Spot snorkeling", "Perahu kayu"]
            }
        ]
    },
    {
        title: "Pulau Kei",
        destination: "NTT",
        status: "atraksi",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/pulau-kei.png",
        rating: 4.7,
        reviews: [
            { user: "Dewi L.", rating: 5, comment: "Pantai yang sangat tenang dan bersih, cocok untuk relaksasi." },
            { user: "Fadli M.", rating: 4, comment: "Pulau indah, tapi butuh perjalanan panjang untuk sampai ke sini." }
        ],
        startPrice: "Rp 30.000,00",
        address: "Kepulauan Kei, Kabupaten Maluku Tenggara, Maluku",
        schedule: "Setiap hari | 24 jam",
        description: "Gugusan pulau dengan pantai berpasir putih halus dan perairan biru jernih, menawarkan suasana tenang dan alami jauh dari keramaian.",
        ticketTypes: [
            {
                title: "Tiket Masuk Pulau",
                price: 30000,
                category: "Semua Usia",
                description: "Tiket masuk ke Pulau Kei untuk menikmati pantainya yang eksotis.",
                facilities: ["Akses ke pantai", "Spot diving", "Perahu tradisional"]
            }
        ]
    },
    {
        title: "Desa Wae Rebo",
        destination: "NTT",
        status: "atraksi",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/wae-rebo.png",
        rating: 4.9,
        reviews: [
            { user: "Putri A.", rating: 5, comment: "Perjalanan ke sini menantang, tapi sangat sepadan!" },
            { user: "Budi T.", rating: 4, comment: "Desanya indah dan ramah, tapi jalannya cukup sulit ditempuh." }
        ],
        startPrice: "Rp 325.000,00",
        address: "Desa Satar Lenda, Kecamatan Satar Mese Barat, Kabupaten Manggarai, Nusa Tenggara Timur",
        schedule: "Setiap hari | 24 jam",
        description: "Desa tradisional di pegunungan dengan rumah adat berbentuk kerucut, menawarkan pengalaman budaya dan pemandangan alam yang menakjubkan.",
        ticketTypes: [
            {
                title: "Tiket Menginap di Desa",
                price: 325000,
                category: "Dewasa (13-99 tahun)",
                description: "Tiket untuk menginap di rumah adat Wae Rebo, termasuk makan malam dan tur budaya.",
                facilities: ["Akomodasi rumah adat", "Tur budaya", "Makan malam"]
            }
        ]
    },
    {
        title: "Pulau Kanawa",
        destination: "Sumatera",
        status: "atraksi",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/pulau-kanawa.png",
        rating: 4.8,
        reviews: [
            { user: "Rina H.", rating: 5, comment: "Snorkeling di sini sangat luar biasa!" },
            { user: "Yogi F.", rating: 4, comment: "Pulau kecil yang sangat indah, cocok untuk bersantai." }
        ],
        startPrice: "Rp 100.000,00",
        address: "Labuan Bajo, Kabupaten Manggarai Barat, Nusa Tenggara Timur",
        schedule: "Setiap hari | 08.00 - 17.00 WITA",
        description: "Pulau kecil dengan pantai berpasir putih dan terumbu karang yang kaya, ideal untuk snorkeling dan relaksasi.",
        ticketTypes: [
            {
                title: "Tiket Masuk Pulau",
                price: 100.000,
                category: "Semua Usia",
                description: "Tiket untuk masuk ke Pulau Kanawa dan menikmati snorkeling.",
                facilities: ["Akses ke pulau", "Spot snorkeling", "Restoran lokal"]
            }
        ]
    },
    {
        title: "Festival Sekaten",
        destination: "Yogyakarta",
        status: "festival",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/sekaten.png",
        rating: 4.6,
        reviews: [
            { user: "Nina S.", rating: 5, comment: "Suasananya meriah, banyak pertunjukan budaya menarik!" },
            { user: "Budi R.", rating: 4, comment: "Pasar malamnya sangat ramai, tapi tetap seru!" }
        ],
        startPrice: "Rp 20.000,00",
        address: "Alun-Alun Utara, Kota Yogyakarta, Daerah Istimewa Yogyakarta",
        schedule: "2025-08-12",
        description: "Festival Sekaten adalah perayaan tradisional untuk memperingati Maulid Nabi Muhammad SAW dengan berbagai pertunjukan seni dan pasar malam. Acara ini diisi dengan gamelan khas keraton, kirab gunungan, dan bazar kuliner khas Yogyakarta. Suasananya yang meriah menjadikannya salah satu acara budaya yang paling dinantikan di Yogyakarta.",
        ticketTypes: [
            {
                title: "Tiket Masuk Festival",
                price: 20000,
                category: "Umum (Semua Usia)",
                description: "Tiket masuk untuk menikmati seluruh area Festival Sekaten, termasuk pertunjukan budaya dan pasar malam.",
                facilities: ["Akses ke festival", "Zona kuliner", "Pertunjukan seni"]
            },
            {
                title: "Tiket VIP (Area Khusus)",
                price: 50000,
                category: "Dewasa (13-99 tahun)",
                description: "Akses ke area VIP untuk menonton pertunjukan dengan tempat duduk yang nyaman.",
                facilities: ["Tempat duduk khusus", "Akses backstage", "Minuman gratis"]
            }
        ]
    },
    {
        title: "Festival Danau Toba",
        destination: "Sumatera",
        status: "festival",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/danau-toba.png",
        rating: 4.8,
        reviews: [
            { user: "Siti W.", rating: 5, comment: "Pemandangan Danau Toba saat festival sangat menakjubkan!" },
            { user: "Rizky A.", rating: 4, comment: "Banyak pertunjukan budaya Batak yang keren!" }
        ],
        startPrice: "Rp 100.000,00",
        address: "Parapat, Kabupaten Simalungun, Sumatera Utara",
        schedule: "2025-06-07",
        description: "Festival tahunan yang menampilkan berbagai pertunjukan budaya Batak, lomba olahraga air, dan pameran kerajinan tangan. Acara ini menarik wisatawan dari berbagai daerah dan luar negeri, serta menjadi ajang pelestarian budaya Batak yang kaya dan unik.",
        ticketTypes: [
            {
                title: "Tiket Masuk Harian",
                price: 100000,
                category: "Umum (Semua Usia)",
                description: "Tiket untuk satu hari penuh menikmati semua pertunjukan di Festival Danau Toba.",
                facilities: ["Akses ke area festival", "Pertunjukan seni", "Zona kuliner"]
            },
            {
                title: "Paket Festival 3 Hari",
                price: "Rp 250.000,00",
                category: "Dewasa (13-99 tahun)",
                description: "Paket akses festival selama 3 hari berturut-turut dengan fasilitas tambahan.",
                facilities: ["Akses festival 3 hari", "Tur budaya", "Merchandise eksklusif"]
            }
        ]
    },
    {
        title: "Festival Reog Ponorogo",
        destination: "Jawa Timur",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/reog-ponorogo.png",
        rating: 4.7,
        reviews: [
            { user: "Dian P.", rating: 5, comment: "Penampilan Reog Ponorogo sangat spektakuler!" },
            { user: "Fajar M.", rating: 4, comment: "Sangat menghibur, tapi perlu datang lebih awal untuk mendapatkan tempat duduk terbaik." }
        ],
        startPrice: "Rp 50.000,00",
        address: "Alun-Alun Kota Ponorogo, Jawa Timur",
        schedule: "2025-07-14",
        description: "Pertunjukan seni Reog Ponorogo yang menampilkan tarian dengan topeng besar dan kostum megah sebagai bagian dari tradisi lokal. Festival ini menggabungkan kesenian, budaya, dan semangat gotong royong dalam satu acara yang megah dan penuh semangat.",
        ticketTypes: [
            {
                title: "Tiket Masuk Umum",
                price: 50000,
                category: "Umum (Semua Usia)",
                description: "Tiket masuk untuk menyaksikan berbagai pertunjukan Reog Ponorogo di Alun-Alun Kota.",
                facilities: ["Akses ke area festival", "Pertunjukan seni"]
            },
            {
                title: "Tiket VIP (Area Khusus)",
                price: 100000,
                category: "Dewasa (13-99 tahun)",
                description: "Akses ke area VIP dengan tempat duduk terbaik dan pengalaman eksklusif.",
                facilities: ["Tempat duduk eksklusif", "Makanan & minuman", "Meet & Greet dengan peserta"]
            }
        ]
    },
    {
        title: "Karapan Sapi Madura",
        destination: "Jawa Timur",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/karapan-sapi.png",
        rating: 4.8,
        reviews: [
            { user: "Aji W.", rating: 5, comment: "Lomba yang sangat seru! Sapi-sapinya luar biasa cepat." },
            { user: "Tina L.", rating: 4, comment: "Menarik, tapi debu dari arena balapan cukup mengganggu." }
        ],
        startPrice: "Rp 75.000,00",
        address: "Stadion Pamekasan, Madura, Jawa Timur",
       schedule: "2025-07-22",
        description: "Balapan sapi tradisional Madura yang menampilkan ketangkasan dan kecepatan sapi dalam lintasan balap.",
        ticketTypes: [
            {
                title: "Tiket VIP Tribun",
                price: 75.000,
                category: "Umum",
                description: "Akses ke tribun utama untuk pengalaman menonton lebih nyaman.",
                facilities: ["Kursi empuk", "Snack & Minuman", "Akses dekat lintasan"]
            }
        ]
    },
    {
        title: "Upacara Kasada di Bromo",
        destination: "Jawa Timur",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/kasada-bromo.png",
        rating: 4.9,
        reviews: [
            { user: "Rina M.", rating: 5, comment: "Sangat sakral dan mengesankan, pemandangan Bromo di malam hari luar biasa!" },
            { user: "Gilang S.", rating: 4, comment: "Menarik tapi cukup dingin, jadi bawa jaket tebal!" }
        ],
        startPrice: "Rp 30.000,00",
        address: "Gunung Bromo, Probolinggo, Jawa Timur",
        schedule: "2025-05-16",
        description: "Upacara adat suku Tengger di mana sesajen dilemparkan ke kawah Gunung Bromo sebagai bentuk syukur kepada Sang Hyang Widhi.",
        ticketTypes: [
            {
                title: "Tiket Wisatawan",
                price: 30000,
                category: "Umum",
                description: "Akses ke area upacara untuk menyaksikan ritual Kasada dari dekat.",
                facilities: ["Akses ke spot terbaik", "Pemandu wisata"]
            }
        ]
    },
    {
        title: "Gandrung Sewu Banyuwangi",
        destination: "Jawa Timur",
        status: "festival",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/gandrung-sewu.png",
        rating: 4.7,
        reviews: [
            { user: "Eka P.", rating: 5, comment: "Penampilan tarian yang sangat megah dengan ribuan penari!" },
            { user: "Santi J.", rating: 4, comment: "Sayangnya tempat parkir cukup jauh dari lokasi acara." }
        ],
        startPrice: "Rp 75.000,00",
        address: "Pantai Boom, Banyuwangi, Jawa Timur",
        schedule: "2025-09-30",
        description: "Tari Gandrung yang dibawakan oleh ribuan penari sebagai bagian dari warisan budaya Banyuwangi.",
        ticketTypes: [
            {
                title: "Tiket VIP",
                price: 75000,
                category: "Umum",
                description: "Akses ke area VIP dengan tempat duduk terbaik dan pemandangan langsung ke panggung utama.",
                facilities: ["Kursi eksklusif", "Souvenir acara", "Snack & Minuman"]
            }
        ]
    },
    {
        title: "Festival 1000 Obor",
        destination: "Jawa Timur",
        status: "festival",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/1000-obor.png",
        rating: 4.6,
        reviews: [
            { user: "Bagus K.", rating: 5, comment: "Suasana malam dengan obor sangat magis!" },
            { user: "Wulan A.", rating: 4, comment: "Acaranya bagus, tapi macet saat menuju lokasi." }
        ],
        startPrice: "Rp 20.000,00",
        address: "Kota Bondowoso, Jawa Timur",
        schedule: "2025-07-07",
        description: "Festival di mana ribuan obor dinyalakan sebagai bagian dari tradisi keagamaan dan budaya masyarakat Bondowoso.",
        ticketTypes: [
            {
                title: "Tiket Dokumentasi",
                price: 20000,
                category: "Umum",
                description: "Akses ke spot khusus untuk dokumentasi dan fotografi.",
                facilities: ["Spot terbaik untuk foto", "Pemandu acara"]
            }
        ]
    },
    {
        title: "Festival Kecak Uluwatu",
        destination: "Pulau Bali",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/kecak-uluwatu.png",
        rating: 4.9,
        reviews: [
            { user: "Gilang S.", rating: 5, comment: "Pertunjukan yang luar biasa dengan latar matahari terbenam!" },
            { user: "Siti H.", rating: 4, comment: "Harus datang lebih awal untuk mendapatkan tempat terbaik." }
        ],
        startPrice: "Rp 100.000,00",
        address: "Pura Uluwatu, Bali",
        schedule: "Setiap hari | 18.00 - 19.00 WITA",
        description: "Tari Kecak Uluwatu adalah pertunjukan tari tradisional yang dilakukan dengan paduan suara pria yang menyerukan 'cak' berulang kali, dengan latar belakang matahari terbenam di Pura Uluwatu.",
        ticketTypes: [
            {
                title: "Tiket Kelas Reguler",
                price: 100000,
                category: "Umum",
                description: "Tiket untuk menyaksikan pertunjukan Kecak di Pura Uluwatu.",
                facilities: ["Akses ke area pertunjukan", "Pemandangan matahari terbenam"]
            },
            {
                title: "Tiket VIP",
                price: 200000,
                category: "Dewasa",
                description: "Tiket VIP dengan tempat duduk prioritas di area depan.",
                facilities: ["Tempat duduk eksklusif", "Souvenir acara"]
            }
        ]
    },
    {
        title: "Taman Nasional Bali Barat",
        destination: "Pulau Bali",
        cart:0,
        list:0,
        status: "atraksi",
        image: "asset/gambar-atraksi/bali-barat.png",
        rating: 4.7,
        reviews: [
            { user: "Andre T.", rating: 5, comment: "Surga bagi pecinta alam dan fotografi!" },
            { user: "Rina J.", rating: 4, comment: "Pemandangannya indah, tapi perlu pemandu untuk menjelajahi lebih jauh." }
        ],
        startPrice: "Rp 50.000,00",
        address: "Buleleng & Jembrana, Bali",
        schedule: "Setiap hari | 07.00 - 17.00 WITA",
        description: "Taman Nasional Bali Barat adalah rumah bagi berbagai flora dan fauna unik, termasuk burung Jalak Bali yang langka. Tempat ini ideal untuk hiking, snorkeling, dan bird-watching.",
        ticketTypes: [
            {
                title: "Tiket Masuk Taman Nasional",
                price: 50000,
                category: "Umum",
                description: "Akses ke seluruh area taman nasional untuk eksplorasi alam.",
                facilities: ["Akses hiking", "Area bird-watching"]
            },
            {
                title: "Tiket Snorkeling Menjangan",
                price: 150000,
                category: "Dewasa",
                description: "Paket snorkeling di Pulau Menjangan dalam kawasan taman nasional.",
                facilities: ["Peralatan snorkeling", "Pemandu wisata"]
            }
        ]
    },
    {
        title: "Festival Jatiluwih Rice Terrace",
        destination: "Pulau Bali",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/jatiluwih-rice.jpg",
        rating: 4.8,
        reviews: [
            { user: "Daniel P.", rating: 5, comment: "Hamparan sawah yang menakjubkan dengan suasana festival yang meriah!" },
            { user: "Ayu N.", rating: 4, comment: "Festival yang bagus, tapi sebaiknya datang pagi untuk menghindari panas." }
        ],
        startPrice: "Rp 40.000,00",
        address: "Jatiluwih, Tabanan, Bali",
        schedule: "2025-05-16",
        description: "Festival ini merayakan keindahan dan keunikan Subak, sistem irigasi tradisional Bali yang diakui UNESCO, dengan pertunjukan budaya dan kuliner khas pertanian Bali.",
        ticketTypes: [
            {
                title: "Tiket Masuk Festival",
                price: 40000,
                category: "Umum",
                description: "Akses ke area festival dengan berbagai pertunjukan budaya.",
                facilities: ["Akses ke sawah", "Tur budaya Subak"]
            },
            {
                title: "Tiket Eksplorasi Subak",
                price: 80000,
                category: "Dewasa",
                description: "Paket tur untuk mengenal sistem irigasi Subak dan pertanian tradisional Bali.",
                facilities: ["Tur ke sawah", "Demonstrasi pertanian"]
            }
        ]
    },
    {
        title: "Keraton Yogyakarta",
        destination: "Yogyakarta",
        cart:0,
        list:0,
        status: "atraksi",
        image: "asset/gambar-atraksi/keraton-yogyakarta.png",
        rating: 4.8,
        reviews: [
            { user: "Rina T.", rating: 5, comment: "Sejarah dan budayanya sangat terasa di tempat ini!" },
            { user: "Fajar K.", rating: 4, comment: "Tempatnya menarik, tapi lebih baik datang pagi agar tidak terlalu ramai." }
        ],
        startPrice: "Rp 25.000,00",
        address: "Jl. Rotowijayan No.1, Kota Yogyakarta",
        schedule: "Setiap hari | 08.00 - 14.00 WIB",
        description: "Keraton Yogyakarta adalah istana resmi Sultan Yogyakarta yang masih aktif digunakan hingga saat ini. Wisatawan dapat melihat arsitektur khas Jawa, koleksi peninggalan bersejarah, serta pertunjukan seni di dalam kompleks keraton.",
        ticketTypes: [
            {
                title: "Tiket Masuk Umum",
                price: 25000,
                category: "Umum",
                description: "Akses untuk menjelajahi area utama Keraton Yogyakarta.",
                facilities: ["Tur sejarah", "Akses ke museum"]
            },
            {
                title: "Tiket VIP dengan Pemandu",
                price: 50000,
                category: "Dewasa",
                description: "Tiket dengan tur eksklusif yang dipandu oleh pemandu resmi keraton.",
                facilities: ["Tur eksklusif", "Souvenir keraton"]
            }
        ]
    },
    {
        title: "Festival Wayang Jogja Night",
        destination: "Yogyakarta",
        cart:0,
        list:0,
        status: "festival",
        image: "asset/gambar-atraksi/wayang-jogja.png",
        rating: 4.9,
        reviews: [
            { user: "Eka S.", rating: 5, comment: "Parade yang sangat megah dengan kostum dan dekorasi luar biasa!" },
            { user: "Ari W.", rating: 4, comment: "Seru banget, tapi harus datang lebih awal untuk mendapatkan tempat terbaik." }
        ],
        startPrice: "Rp 30.000,00",
        address: "Jalan Malioboro, Kota Yogyakarta",
        schedule: "2025-09-12",
        description: "Jogja Night Carnival adalah parade spektakuler yang menampilkan pertunjukan wayang modern dengan kombinasi musik, tari, dan kostum megah yang memukau ribuan penonton di sepanjang Jalan Malioboro.",
        ticketTypes: [
            {
                title: "Tiket Festival Umum",
                price: 30000,
                category: "Umum",
                description: "Tiket masuk untuk menikmati festival dan parade budaya.",
                facilities: ["Akses ke area festival", "Pertunjukan wayang modern"]
            },
            {
                title: "Tiket VIP",
                price: 75000,
                category: "Dewasa",
                description: "Tiket untuk akses area eksklusif dengan kursi prioritas.",
                facilities: ["Tempat duduk prioritas", "Snack & Minuman"]
            }
        ]
    },
    {
        title: "Goa Jomblang",
        destination: "Yogyakarta",
        status: "atraksi",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/goa-jomblang.png",
        rating: 4.8,
        reviews: [
            { user: "Fikri H.", rating: 5, comment: "Cahaya surga di dalam goa ini benar-benar luar biasa!" },
            { user: "Sari L.", rating: 4, comment: "Pengalaman yang seru, tapi akses turun cukup menantang." }
        ],
        startPrice: "Rp 500.000,00",
        address: "Semanu, Kabupaten Gunungkidul, Yogyakarta",
        schedule: "Setiap hari | 08.00 - 14.00 WIB",
        description: "Goa Jomblang adalah goa vertikal yang terkenal dengan 'Cahaya Surga' yang masuk melalui lubang besar di bagian atas goa. Wisatawan akan menuruni tebing menggunakan tali dan menyaksikan keindahan alam yang unik di dalamnya.",
        ticketTypes: [
            {
                title: "Paket Tur Goa Jomblang",
                price: 500000,
                category: "Dewasa",
                description: "Paket tur lengkap dengan peralatan caving dan pemandu profesional.",
                facilities: ["Pemandu profesional", "Peralatan lengkap", "Makan siang"]
            }
        ]
    },
    {
        title: "Festival Ratu Boko Sunset",
        destination: "Yogyakarta",
        status: "festival",
        cart:0,
        list:0,
        image: "asset/gambar-atraksi/ratu-boko.png",
        rating: 4.9,
        reviews: [
            { user: "Rendy P.", rating: 5, comment: "Sunset di Ratu Boko sangat magis dan berkesan!" },
            { user: "Lisa W.", rating: 4, comment: "Tempatnya bagus untuk foto, tapi harus menunggu matahari terbenam." }
        ],
        startPrice: "Rp 75.000,00",
        address: "Situs Ratu Boko, Sleman, Yogyakarta",
        schedule: "2025-10-10",
        description: "Festival ini menghadirkan pertunjukan seni dan budaya yang berpadu dengan keindahan matahari terbenam di situs sejarah Ratu Boko. Acara ini menampilkan tari-tarian tradisional, musik gamelan, dan berbagai pertunjukan seni lainnya.",
        ticketTypes: [
            {
                title: "Tiket Masuk Festival",
                price: 75000,
                category: "Umum",
                description: "Akses ke area festival untuk menikmati pertunjukan seni dengan latar belakang sunset.",
                facilities: ["Akses ke festival", "Tempat terbaik untuk foto sunset"]
            },
            {
                title: "Tiket VIP",
                price: 150000,
                category: "Dewasa",
                description: "Tiket VIP dengan fasilitas tambahan dan akses eksklusif.",
                facilities: ["Tempat duduk eksklusif", "Souvenir acara", "Minuman gratis"]
            }
        ]
    },
    {
        title: "Festival Pacu Jalur",
        destination: "Riau",
        cart: 0,
        list: 0,
        status: "festival",
        image: "asset/gambar-atraksi/pacu-jalur.webp",
        rating: 4.8,
        reviews: [
            { user: "Yusuf T.", rating: 5, comment: "Lomba perahu yang sangat seru dan menegangkan!" },
            { user: "Indah R.", rating: 4, comment: "Acara besar dengan suasana penuh semangat." }
        ],
        startPrice: "Rp 60.000,00",
        address: "Tembilahan, Riau",
        schedule: "2025-08-08",
        description: "Festival Pacu Jalur adalah perlombaan perahu tradisional khas Riau dengan berbagai pertunjukan seni.",
        ticketTypes: [
            {
                title: "Tiket Umum",
                price: 60000,
                category: "Umum",
                description: "Akses ke festival dan tribun umum.",
                facilities: ["Lomba perahu", "Pertunjukan seni daerah"]
            },
            {
                title: "Tiket Eksklusif",
                price: 120000,
                category: "Dewasa",
                description: "Akses ke tribun utama dengan pemandangan terbaik.",
                facilities: ["Tempat duduk VIP", "Snack & minuman"]
            }
        ]
    },
    {
        title: "Festival Megalithik Nias",
        destination: "Sumatra Utara",
        cart: 0,
        list: 0,
        status: "festival",
        image: "asset/gambar-atraksi/megalithik-nias.jpg",
        rating: 4.7,
        reviews: [
            { user: "Budi S.", rating: 5, comment: "Lompat batu Nias sangat mengesankan!" },
            { user: "Rina A.", rating: 4, comment: "Budaya megalitik yang sangat unik dan menarik." }
        ],
        startPrice: "Rp 55.000,00",
        address: "Nias, Sumatra Utara",
        schedule: "2025-05-22",
        description: "Festival ini memperkenalkan tradisi megalitik dan atraksi khas Nias, termasuk lompat batu.",
        ticketTypes: [
            {
                title: "Tiket Festival",
                price: 55000,
                category: "Umum",
                description: "Akses ke festival dan berbagai atraksi budaya.",
                facilities: ["Lompat batu", "Pameran megalitik"]
            },
            {
                title: "Tiket VIP",
                price: 110000,
                category: "Dewasa",
                description: "Akses ke area eksklusif dengan pemandangan terbaik.",
                facilities: ["Tempat duduk premium", "Paket makanan khas"]
            }
        ]
    },
    {
        title: "Festival Keraton Nusantara",
        destination: "Sumatra Selatan",
        cart: 0,
        list: 0,
        status: "festival",
        image: "asset/gambar-atraksi/keraton-palembang.jpg",
        rating: 4.9,
        reviews: [
            { user: "Arif D.", rating: 5, comment: "Kebudayaan kerajaan yang sangat menarik, penuh sejarah!" },
            { user: "Dewi K.", rating: 5, comment: "Pertunjukan seni dan parade keraton sangat megah!" }
        ],
        startPrice: "Rp 70.000,00",
        address: "Palembang, Sumatra Selatan",
        schedule: "2025-03-26",
        description: "Festival ini menampilkan budaya kerajaan di Indonesia, termasuk parade busana kerajaan dan pertunjukan seni tradisional.",
        ticketTypes: [
            {
                title: "Tiket Umum",
                price: 70000,
                category: "Umum",
                description: "Akses ke seluruh area festival.",
                facilities: ["Parade keraton", "Pertunjukan tari"]
            },
            {
                title: "Tiket VIP",
                price: 140000,
                category: "Dewasa",
                description: "Akses eksklusif ke area utama dengan layanan khusus.",
                facilities: ["Tempat duduk VIP", "Sajian kuliner khas"]
            }
        ]
    },
    {
        title: "Istano Basa Pagaruyung",
        destination: "Sumatra Barat",
        status: "atraksi",
        cart: 0,
        list: 0,
        image: "asset/gambar-atraksi/pagaruyung.jpg",
        rating: 4.8,
        reviews: [
            { user: "Rina M.", rating: 5, comment: "Istana ini megah dan penuh sejarah, wajib dikunjungi!" },
            { user: "Fajar K.", rating: 4, comment: "Bagus untuk foto-foto, tapi ramai di akhir pekan." }
        ],
        startPrice: "Rp 50.000,00",
        address: "Batusangkar, Tanah Datar, Sumatra Barat",
        schedule: "Setiap hari | 08:00 - 18:00",
        description: "Replika istana kerajaan Minangkabau dengan arsitektur khas dan koleksi benda bersejarah.",
        ticketTypes: [
            {
                title: "Tiket Masuk",
                price: 50000,
                category: "Umum",
                description: "Akses ke dalam istana untuk melihat koleksi budaya dan sejarah.",
                facilities: ["Tur rumah gadang", "Pameran budaya"]
            }
        ]
    },
    {
        title: "Desa Wisata Dokan",
        destination: "Sumatra Utara",
        status: "atraksi",
        cart: 0,
        list: 0,
        image: "asset/gambar-atraksi/dokan.png",
        rating: 4.7,
        reviews: [
            { user: "Johan S.", rating: 5, comment: "Desa adat Batak yang masih asli, pengalaman luar biasa!" },
            { user: "Siti L.", rating: 4, comment: "Tempatnya keren, tapi akses jalan agak sulit." }
        ],
        startPrice: "Rp 75.000,00",
        address: "Kecamatan Merek, Kabupaten Karo, Sumatra Utara",
        schedule: "Setiap hari | 07:00 - 17:00",
        description: "Desa adat Karo dengan rumah tradisional yang masih dihuni oleh masyarakat setempat.",
        ticketTypes: [
            {
                title: "Tiket Tur Desa",
                price: 75000,
                category: "Umum",
                description: "Tur mengenal rumah adat dan kehidupan masyarakat Karo.",
                facilities: ["Tur budaya", "Pertunjukan tari tradisional"]
            }
        ]
    },
    {
        title: "Benteng Marlborough",
        destination: "Bengkulu",
        status: "atraksi",
        cart: 0,
        list: 0,
        image: "asset/gambar-atraksi/marlborough.jpeg",
        rating: 4.6,
        reviews: [
            { user: "Adi W.", rating: 5, comment: "Benteng bersejarah yang masih terawat dengan baik!" },
            { user: "Dewi P.", rating: 4, comment: "Bagus untuk belajar sejarah, tapi agak panas di siang hari." }
        ],
        startPrice: "Rp 30.000,00",
        address: "Kota Bengkulu, Bengkulu",
        schedule: "Setiap hari | 08:00 - 17:00",
        description: "Benteng peninggalan kolonial Inggris yang masih berdiri kokoh di Bengkulu.",
        ticketTypes: [
            {
                title: "Tiket Masuk",
                price: 30000,
                category: "Umum",
                description: "Akses ke dalam benteng dan area pameran sejarah.",
                facilities: ["Tur sejarah", "Pemandangan laut dari benteng"]
            }
        ]
    },
    {
        title: "Rumah Limas Palembang",
        destination: "Sumatra Selatan",
        status: "atraksi",
        cart: 0,
        list: 0,
        image: "asset/gambar-atraksi/rumah-limas.jpeg",
        rating: 4.7,
        reviews: [
            { user: "Taufik H.", rating: 5, comment: "Rumah adat yang indah dan penuh filosofi budaya!" },
            { user: "Alya N.", rating: 4, comment: "Menarik untuk belajar sejarah, tapi agak jauh dari pusat kota." }
        ],
        startPrice: "Rp 40.000,00",
        address: "Palembang, Sumatra Selatan",
        schedule: "Setiap hari | 09:00 - 17:00",
        description: "Rumah adat khas Palembang dengan arsitektur unik dan penuh nilai budaya.",
        ticketTypes: [
            {
                title: "Tiket Masuk",
                price: 40000,
                category: "Umum",
                description: "Akses ke dalam rumah adat dan galeri sejarah.",
                facilities: ["Tur rumah adat", "Pameran budaya"]
            }
        ]
    },
    {
        title: "Kampung Adat Bawomataluo",
        destination: "Sumatra Utara",
        status: "atraksi",
        cart: 0,
        list: 0,
        image: "asset/gambar-atraksi/bawomataluo.jpg",
        rating: 4.9,
        reviews: [
            { user: "Agus P.", rating: 5, comment: "Budaya Nias yang masih kental dan unik!" },
            { user: "Yulia S.", rating: 4, comment: "Lompat batu Nias sangat menarik untuk disaksikan." }
        ],
        startPrice: "Rp 60.000,00",
        address: "Kabupaten Nias Selatan, Sumatra Utara",
        schedule: "Setiap hari | 08:00 - 16:00",
        description: "Kampung adat dengan rumah tradisional Nias yang megah dan pertunjukan lompat batu.",
        ticketTypes: [
            {
                title: "Tiket Masuk",
                price: 60000,
                category: "Umum",
                description: "Akses ke kampung adat dan pertunjukan lompat batu.",
                facilities: ["Tur budaya", "Pertunjukan lompat batu"]
            }
        ]
    },

];
    


