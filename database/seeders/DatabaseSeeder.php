<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;    
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

         $now = Carbon::now();


        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('msusers')->insert([
            'name'                => 'Madeline',
            'email'              => 'madeline@example.com',
            'password'           => bcrypt('Midi3005'),
        ]);

       DB::table('msattractions')->insert([
            ['title' => 'Festival Erau Kertanegara', 'destination' => 'Kalimantan', 'status' => 'festival', 'rating' => 4.8, 'startPrice' => '30.000,00', 'address' => 'Kota Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur', 'schedule' => '2025-05-26', 'description' => 'Festival budaya terbesar di Kalimantan Timur yang diwariskan oleh Kesultanan Kutai Kartanegara. Acara ini menampilkan berbagai pertunjukan seni tradisional, upacara adat, hingga kompetisi perahu naga di Sungai Mahakam. Wisatawan dapat menyaksikan ritual sakral seperti Belimbur, di mana masyarakat saling menyiram air sebagai simbol pembersihan diri dan keberkahan.', 'operational_hours' => '12.00 - 15.00', 'image1' => 'asset/gambar-atraksi/erau-kertanegara.png', 'image2' => 'asset/gambar-atraksi/erau-kertanegara.png', 'image3' => 'asset/gambar-atraksi/erau-kertanegara.png'],
            ['title' => 'Workshop Membatik', 'destination' => 'Yogyakarta', 'status' => 'atraksi', 'rating' => 4.8, 'startPrice' => 'Rp 75.000,00', 'address' => 'Jl. Wijilan No.23, Panembahan, Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'schedule' => NULL, 'description' => 'Pelajari seni membatik langsung dari pengrajin batik terbaik di Yogyakarta. Dalam workshop ini, peserta akan belajar menggambar motif batik, menggunakan canting, hingga pewarnaan kain. Hasil karya batik yang dibuat dapat dibawa pulang sebagai oleh-oleh.', 'operational_hours' => 'Setiap hari | 09.00 - 17.00', 'image1' => 'asset/gambar-atraksi/workshop-membatik.jpg', 'image2' => 'asset/gambar-atraksi/workshop-membatik2.jpg', 'image3' => 'asset/gambar-atraksi/workshop-membatik3.jpg'],
            ['title' => 'Desa Penglipuran', 'destination' => 'Pulau Bali', 'status' => 'atraksi', 'rating' => 4.9, 'startPrice' => 'Rp 25.000,00', 'address' => 'Desa Penglipuran, Kecamatan Bangli, Kabupaten Bangli, Bali', 'schedule' => NULL, 'description' => 'Desa adat ini dikenal sebagai desa terbersih di dunia. Pengunjung dapat menikmati arsitektur rumah tradisional Bali, interaksi dengan masyarakat setempat, dan keindahan alam yang masih sangat asri. Desa ini juga sering digunakan sebagai lokasi festival budaya dan acara adat khas Bali.', 'operational_hours' => 'Setiap hari | 12.00 - 17.00', 'image1' => 'asset/gambar-atraksi/desa-penglipuran.png', 'image2' => 'asset/gambar-atraksi/desa-penglipuran.png', 'image3' => 'asset/gambar-atraksi/desa-penglipuran.png'],
            ['title' => 'Festival Lompat Batu', 'destination' => 'Sumatera', 'status' => 'festival', 'rating' => 4.9, 'startPrice' => 'Rp 50.000,00', 'address' => 'Desa Bawomataluo, Kecamatan Fanayama, Kabupaten Nias Selatan, Sumatera Utara', 'schedule' => '2025-09-20', 'description' => 'Festival yang menampilkan ritual lompat batu setinggi lebih dari 2 meter, yang hanya bisa dilakukan oleh pemuda Nias yang sudah mencapai kedewasaan. Wisatawan bisa menyaksikan langsung kehebatan para pelompat batu serta menikmati tarian perang khas Nias yang heroik dan penuh semangat.', 'operational_hours' => '14.00 - 18.00', 'image1' => 'asset/gambar-atraksi/lompat-batu-nias.jpg', 'image2' => 'asset/gambar-atraksi/lompat-batu-nias.jpg', 'image3' => 'asset/gambar-atraksi/lompat-batu-nias.jpg'],
            ['title' => 'Tradisi Pasola', 'destination' => 'Sumatera', 'status' => 'festival', 'rating' => 4.7, 'startPrice' => 'Rp 100.000,00', 'address' => 'Desa Kodi, Lamboya, Kabupaten Sumba Barat, Nusa Tenggara Timur', 'schedule' => '2025-07-12', 'description' => 'Pasola adalah tradisi perang tanding antar dua kelompok penunggang kuda yang melemparkan tombak kayu ke arah lawan. Tradisi ini merupakan bagian dari kepercayaan Marapu dan menjadi ajang syukuran untuk panen yang melimpah. Wisatawan dapat merasakan kemeriahan suasana serta keunikan budaya yang masih kental di Pulau Sumba.', 'operational_hours' => '13.00 - 17.00', 'image1' => 'asset/gambar-atraksi/pasola-sumba.png', 'image2' => 'asset/gambar-atraksi/pasola-sumba.png', 'image3' => 'asset/gambar-atraksi/pasola-sumba.png'],
            ['title' => 'Pulau Kakaban', 'destination' => 'Kalimantan', 'status' => 'atraksi', 'rating' => 4.9, 'startPrice' => 'Rp 50.000,00', 'address' => 'Kepulauan Derawan, Kabupaten Berau, Kalimantan Timur', 'schedule' => NULL, 'description' => 'Pulau unik dengan danau air payau di tengahnya yang dihuni oleh ubur-ubur tidak menyengat, memungkinkan pengunjung berenang bersama mereka.', 'operational_hours' => 'Setiap hari | 09.00 - 17.00', 'image1' => 'asset/gambar-atraksi/pulau-kakaban.png', 'image2' => 'asset/gambar-atraksi/pulau-kakaban.png', 'image3' => 'asset/gambar-atraksi/pulau-kakaban.png'],
            ['title' => 'Danau Labuan Cermin', 'destination' => 'Kalimantan', 'status' => 'atraksi', 'rating' => 4.8, 'startPrice' => 'Rp 25.000,00', 'address' => 'Biduk-Biduk, Kabupaten Berau, Kalimantan Timur', 'schedule' => NULL, 'description' => 'Danau dengan air yang sangat jernih hingga dasar terlihat jelas, menawarkan pengalaman snorkeling di perairan tenang dengan dua rasa, tawar di permukaan dan asin di kedalaman.', 'operational_hours' => 'Setiap hari | 09.00 - 14.00', 'image1' => 'asset/gambar-atraksi/danau-labuan-cermin.png', 'image2' => 'asset/gambar-atraksi/danau-labuan-cermin.png', 'image3' => 'asset/gambar-atraksi/danau-labuan-cermin.png'],
            ['title' => 'Pulau Kei', 'destination' => 'NTT', 'status' => 'atraksi', 'rating' => 4.7, 'startPrice' => 'Rp 30.000,00', 'address' => 'Kepulauan Kei, Kabupaten Maluku Tenggara, Maluku', 'schedule' => NULL, 'description' => 'Gugusan pulau dengan pantai berpasir putih halus dan perairan biru jernih, menawarkan suasana tenang dan alami jauh dari keramaian.', 'operational_hours' => 'Setiap hari | 09.00 - 17.00', 'image1' => 'asset/gambar-atraksi/pulau-kei.png', 'image2' => 'asset/gambar-atraksi/pulau-kei.png', 'image3' => 'asset/gambar-atraksi/pulau-kei.png'],
            ['title' => 'Desa Wae Rebo', 'destination' => 'NTT', 'status' => 'atraksi', 'rating' => 4.9, 'startPrice' => 'Rp 325.000,00', 'address' => 'Desa Satar Lenda, Kecamatan Satar Mese Barat, Kabupaten Manggarai, Nusa Tenggara Timur', 'schedule' => NULL, 'description' => 'Desa tradisional di pegunungan dengan rumah adat berbentuk kerucut, menawarkan pengalaman budaya dan pemandangan alam yang menakjubkan.', 'operational_hours' => 'Setiap hari | 08.00 - 18.00', 'image1' => 'asset/gambar-atraksi/wae-rebo.png', 'image2' => 'asset/gambar-atraksi/wae-rebo.png', 'image3' => 'asset/gambar-atraksi/wae-rebo.png'],
            ['title' => 'Pulau Kanawa', 'destination' => 'Sumatera', 'status' => 'atraksi', 'rating' => 4.8, 'startPrice' => 'Rp 100.000,00', 'address' => 'Labuan Bajo, Kabupaten Manggarai Barat, Nusa Tenggara Timur', 'schedule' => NULL, 'description' => 'Pulau kecil dengan pantai berpasir putih dan terumbu karang yang kaya, ideal untuk snorkeling dan relaksasi.', 'operational_hours' => 'Setiap hari | 09.00 - 17.00', 'image1' => 'asset/gambar-atraksi/pulau-kanawa.png', 'image2' => 'asset/gambar-atraksi/pulau-kanawa.png', 'image3' => 'asset/gambar-atraksi/pulau-kanawa.png'],
            ['title' => 'Festival Sekaten', 'destination' => 'Yogyakarta', 'status' => 'festival', 'rating' => 4.6, 'startPrice' => 'Rp 20.000,00', 'address' => 'Alun-Alun Utara, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'schedule' => '2025-08-12', 'description' => 'Festival Sekaten adalah perayaan tradisional untuk memperingati Maulid Nabi Muhammad SAW dengan berbagai pertunjukan seni dan pasar malam. Acara ini diisi dengan gamelan khas keraton, kirab gunungan, dan bazar kuliner khas Yogyakarta. Suasananya yang meriah menjadikannya salah satu acara budaya yang paling dinantikan di Yogyakarta.', 'operational_hours' => '10.00 - 17.00', 'image1' => 'asset/gambar-atraksi/sekaten.png', 'image2' => 'asset/gambar-atraksi/sekaten.png', 'image3' => 'asset/gambar-atraksi/sekaten.png'],
        ]);

        // 2. Seed msttickettypes
        DB::table('msttickettypes')->insert([
            [
                'attraction_id' => 1,
                'title'         => 'Dewasa',
                'price'         => 50000,
                'category'      => 'Regular',
                'description'   => 'Tiket untuk pengunjung dewasa (12–60 tahun).',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'attraction_id' => 1,
                'title'         => 'Anak-anak',
                'price'         => 30000,
                'category'      => 'Child',
                'description'   => 'Tiket untuk anak-anak (<12 tahun).',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'attraction_id' => 2,
                'title'         => 'General',
                'price'         => 40000,
                'category'      => 'Regular',
                'description'   => 'Tiket umum Candi Sukuh.',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

        // 3. Seed msreviews
        DB::table('msreviews')->insert([
            [
                'attraction_id' => 1,
                'user_id'       => 1,
                'rating'        => 5,
                'comment'       => 'Airnya jernih sekali, rekomended!',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'attraction_id' => 2,
                'user_id'       => 1,
                'rating'        => 4,
                'comment'       => 'Bangunannya unik, tapi ramai pengunjung.',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

        // 4. Seed msusercart
        DB::table('msusercart')->insert([
            [
                'ticket_type_id' => 1,
                'user_id'        => 1,
                'quantity'       => 2,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
            [
                'ticket_type_id' => 3,
                'user_id'        => 1,
                'quantity'       => 1,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
        ]);

        // 5. Seed mshistory
        DB::table('mshistory')->insert([
            [
                'ticket_type_id' => 1,
                'quantity'       => 2,
                'user_id'        => 1,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
            [
                'ticket_type_id' => 2,
                'quantity'       => 3,
                'user_id'        => 1,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
        ]);

    }
}
