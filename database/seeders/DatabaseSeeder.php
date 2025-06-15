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
            'password'           => Midi3005,
            'remember_token'     => Str::random(10),
        ]);

        DB::table('msattractions')->insert([
            ['name' => 'Festival Erau Kertanegara', 'location' => 'Kalimantan', 'type' => 'festival', 'rating' => 4.8, 'price' => '30.000,00', 'address' => 'Kota Tenggarong, Kabupaten Kutai Kartanegara, Kalimantan Timur', 'date' => '2025-05-26', 'description' => 'Festival budaya terbesar di Kalimantan Timur yang diwariskan oleh Kesultanan Kutai Kartanegara. Acara ini menampilkan berbagai pertunjukan seni tradisional, upacara adat, hingga kompetisi perahu naga di Sungai Mahakam. Wisatawan dapat menyaksikan ritual sakral seperti Belimbur, di mana masyarakat saling menyiram air sebagai simbol pembersihan diri dan keberkahan.', 'schedule' => '12.00 - 15.00', 'image' => 'asset/gambar-atraksi/erau-kertanegara.png', 'image_1' => 'asset/gambar-atraksi/erau-kertanegara.png', 'image_2' => 'asset/gambar-atraksi/erau-kertanegara.png'],
            ['name' => 'Workshop Membatik', 'location' => 'Yogyakarta', 'type' => 'atraksi', 'rating' => 4.8, 'price' => 'Rp 75.000,00', 'address' => 'Jl. Wijilan No.23, Panembahan, Kraton, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'date' => NULL, 'description' => 'Pelajari seni membatik langsung dari pengrajin batik terbaik di Yogyakarta. Dalam workshop ini, peserta akan belajar menggambar motif batik, menggunakan canting, hingga pewarnaan kain. Hasil karya batik yang dibuat dapat dibawa pulang sebagai oleh-oleh.', 'schedule' => 'Setiap hari | 09.00 - 17.00', 'image' => 'asset/gambar-atraksi/workshop-membatik.jpg', 'image_1' => 'asset/gambar-atraksi/workshop-membatik2.jpg', 'image_2' => 'asset/gambar-atraksi/workshop-membatik3.jpg'],
            ['name' => 'Desa Penglipuran', 'location' => 'Pulau Bali', 'type' => 'atraksi', 'rating' => 4.9, 'price' => 'Rp 25.000,00', 'address' => 'Desa Penglipuran, Kecamatan Bangli, Kabupaten Bangli, Bali', 'date' => NULL, 'description' => 'Desa adat ini dikenal sebagai desa terbersih di dunia. Pengunjung dapat menikmati arsitektur rumah tradisional Bali, interaksi dengan masyarakat setempat, dan keindahan alam yang masih sangat asri. Desa ini juga sering digunakan sebagai lokasi festival budaya dan acara adat khas Bali.', 'schedule' => 'Setiap hari | 12.00 - 17.00', 'image' => 'asset/gambar-atraksi/desa-penglipuran.png', 'image_1' => 'asset/gambar-atraksi/desa-penglipuran.png', 'image_2' => 'asset/gambar-atraksi/desa-penglipuran.png'],
            ['name' => 'Festival Lompat Batu', 'location' => 'Sumatera', 'type' => 'festival', 'rating' => 4.9, 'price' => 'Rp 50.000,00', 'address' => 'Desa Bawomataluo, Kecamatan Fanayama, Kabupaten Nias Selatan, Sumatera Utara', 'date' => '2025-09-20', 'description' => 'Festival yang menampilkan ritual lompat batu setinggi lebih dari 2 meter, yang hanya bisa dilakukan oleh pemuda Nias yang sudah mencapai kedewasaan. Wisatawan bisa menyaksikan langsung kehebatan para pelompat batu serta menikmati tarian perang khas Nias yang heroik dan penuh semangat.', 'schedule' => '14.00 - 18.00', 'image' => 'asset/gambar-atraksi/lompat-batu-nias.jpg', 'image_1' => 'asset/gambar-atraksi/lompat-batu-nias.jpg', 'image_2' => 'asset/gambar-atraksi/lompat-batu-nias.jpg'],
            ['name' => 'Tradisi Pasola', 'location' => 'Sumatera', 'type' => 'festival', 'rating' => 4.7, 'price' => 'Rp 100.000,00', 'address' => 'Desa Kodi, Lamboya, Kabupaten Sumba Barat, Nusa Tenggara Timur', 'date' => '2025-07-12', 'description' => 'Pasola adalah tradisi perang tanding antar dua kelompok penunggang kuda yang melemparkan tombak kayu ke arah lawan. Tradisi ini merupakan bagian dari kepercayaan Marapu dan menjadi ajang syukuran untuk panen yang melimpah. Wisatawan dapat merasakan kemeriahan suasana serta keunikan budaya yang masih kental di Pulau Sumba.', 'schedule' => '13.00 - 17.00', 'image' => 'asset/gambar-atraksi/pasola-sumba.png', 'image_1' => 'asset/gambar-atraksi/pasola-sumba.png', 'image_2' => 'asset/gambar-atraksi/pasola-sumba.png'],
            ['name' => 'Pulau Kakaban', 'location' => 'Kalimantan', 'type' => 'atraksi', 'rating' => 4.9, 'price' => 'Rp 50.000,00', 'address' => 'Kepulauan Derawan, Kabupaten Berau, Kalimantan Timur', 'date' => NULL, 'description' => 'Pulau unik dengan danau air payau di tengahnya yang dihuni oleh ubur-ubur tidak menyengat, memungkinkan pengunjung berenang bersama mereka.', 'schedule' => 'Setiap hari | 09.00 - 17.00', 'image' => 'asset/gambar-atraksi/pulau-kakaban.png', 'image_1' => 'asset/gambar-atraksi/pulau-kakaban.png', 'image_2' => 'asset/gambar-atraksi/pulau-kakaban.png'],
            ['name' => 'Danau Labuan Cermin', 'location' => 'Kalimantan', 'type' => 'atraksi', 'rating' => 4.8, 'price' => 'Rp 25.000,00', 'address' => 'Biduk-Biduk, Kabupaten Berau, Kalimantan Timur', 'date' => NULL, 'description' => 'Danau dengan air yang sangat jernih hingga dasar terlihat jelas, menawarkan pengalaman snorkeling di perairan tenang dengan dua rasa, tawar di permukaan dan asin di kedalaman.', 'schedule' => 'Setiap hari | 09.00 - 14.00', 'image' => 'asset/gambar-atraksi/danau-labuan-cermin.png', 'image_1' => 'asset/gambar-atraksi/danau-labuan-cermin.png', 'image_2' => 'asset/gambar-atraksi/danau-labuan-cermin.png'],
            ['name' => 'Pulau Kei', 'location' => 'NTT', 'type' => 'atraksi', 'rating' => 4.7, 'price' => 'Rp 30.000,00', 'address' => 'Kepulauan Kei, Kabupaten Maluku Tenggara, Maluku', 'date' => NULL, 'description' => 'Gugusan pulau dengan pantai berpasir putih halus dan perairan biru jernih, menawarkan suasana tenang dan alami jauh dari keramaian.', 'schedule' => 'Setiap hari | 09.00 - 17.00', 'image' => 'asset/gambar-atraksi/pulau-kei.png', 'image_1' => 'asset/gambar-atraksi/pulau-kei.png', 'image_2' => 'asset/gambar-atraksi/pulau-kei.png'],
            ['name' => 'Desa Wae Rebo', 'location' => 'NTT', 'type' => 'atraksi', 'rating' => 4.9, 'price' => 'Rp 325.000,00', 'address' => 'Desa Satar Lenda, Kecamatan Satar Mese Barat, Kabupaten Manggarai, Nusa Tenggara Timur', 'date' => NULL, 'description' => 'Desa tradisional di pegunungan dengan rumah adat berbentuk kerucut, menawarkan pengalaman budaya dan pemandangan alam yang menakjubkan.', 'schedule' => 'Setiap hari | 08.00 - 18.00', 'image' => 'asset/gambar-atraksi/wae-rebo.png', 'image_1' => 'asset/gambar-atraksi/wae-rebo.png', 'image_2' => 'asset/gambar-atraksi/wae-rebo.png'],
            ['name' => 'Pulau Kanawa', 'location' => 'Sumatera', 'type' => 'atraksi', 'rating' => 4.8, 'price' => 'Rp 100.000,00', 'address' => 'Labuan Bajo, Kabupaten Manggarai Barat, Nusa Tenggara Timur', 'date' => NULL, 'description' => 'Pulau kecil dengan pantai berpasir putih dan terumbu karang yang kaya, ideal untuk snorkeling dan relaksasi.', 'schedule' => 'Setiap hari | 09.00 - 17.00', 'image' => 'asset/gambar-atraksi/pulau-kanawa.png', 'image_1' => 'asset/gambar-atraksi/pulau-kanawa.png', 'image_2' => 'asset/gambar-atraksi/pulau-kanawa.png'],
            ['name' => 'Festival Sekaten', 'location' => 'Yogyakarta', 'type' => 'festival', 'rating' => 4.6, 'price' => 'Rp 20.000,00', 'address' => 'Alun-Alun Utara, Kota Yogyakarta, Daerah Istimewa Yogyakarta', 'date' => '2025-08-12', 'description' => 'Festival Sekaten adalah perayaan tradisional untuk memperingati Maulid Nabi Muhammad SAW dengan berbagai pertunjukan seni dan pasar malam. Acara ini diisi dengan gamelan khas keraton, kirab gunungan, dan bazar kuliner khas Yogyakarta. Suasananya yang meriah menjadikannya salah satu acara budaya yang paling dinantikan di Yogyakarta.', 'schedule' => '10.00 - 17.00', 'image' => 'asset/gambar-atraksi/sekaten.png', 'image_1' => 'asset/gambar-atraksi/sekaten.png', 'image_2' => 'asset/gambar-atraksi/sekaten.png'],
            ['name' => 'Festival Danau Toba', 'location' => 'Sumatera', 'type' => 'festival', 'rating' => 4.8, 'price' => 'Rp 100.000,00', 'address' => 'Parapat, Kabupaten Simalungun, Sumatera Utara', 'date' => '2025-06-07', 'description' => 'Festival tahunan yang menampilkan berbagai pertunjukan budaya Batak, lomba olahraga air, dan pameran kerajinan tangan. Acara ini menarik wisatawan dari berbagai daerah dan luar negeri, serta menjadi ajang pelestarian budaya Batak yang kaya dan unik.', 'schedule' => '12.00 - 16.00', 'image' => 'asset/gambar-atraksi/danau-toba.png', 'image_1' => 'asset/gambar-atraksi/danau-toba.png', 'image_2' => 'asset/gambar-atraksi/danau-toba.png'],
            ['name' => 'Festival Reog Ponorogo', 'location' => 'Jawa Timur', 'type' => 'festival', 'rating' => 4.7, 'price' => 'Rp 50.000,00', 'address' => 'Alun-Alun Kota Ponorogo, Jawa Timur', 'date' => '2025-07-14', 'description' => 'Pertunjukan seni Reog Ponorogo yang menampilkan tarian dengan topeng besar dan kostum megah sebagai bagian dari tradisi lokal. Festival ini menggabungkan kesenian, budaya, dan semangat gotong royong dalam satu acara yang megah dan penuh semangat.', 'schedule' => '09.00 - 18.00', 'image' => 'asset/gambar-atraksi/reog-ponorogo.png', 'image_1' => 'asset/gambar-atraksi/reog-ponorogo.png', 'image_2' => 'asset/gambar-atraksi/reog-ponorogo.png'],
            ['name' => 'Festival 1000 Obor', 'location' => 'Jawa Timur', 'type' => 'festival', 'rating' => 4.6, 'price' => 'Rp 20.000,00', 'address' => 'Kota Bondowoso, Jawa Timur', 'date' => '2025-07-07', 'description' => 'Festival di mana ribuan obor dinyalakan sebagai bagian dari tradisi keagamaan dan budaya masyarakat Bondowoso.', 'schedule' => '18.00 - 21.00', 'image' => 'asset/gambar-atraksi/1000-obor.png', 'image_1' => 'asset/gambar-atraksi/1000-obor.png', 'image_2' => 'asset/gambar-atraksi/1000-obor.png'],
            ['name' => 'Festival Kecak Uluwatu', 'location' => 'Pulau Bali', 'type' => 'festival', 'rating' => 4.9, 'price' => 'Rp 100.000,00', 'address' => 'Pura Uluwatu, Bali', 'date' => '0000-00-00', 'description' => 'Tari Kecak Uluwatu adalah pertunjukan tari tradisional yang dilakukan dengan paduan suara pria yang menyerukan "cak" berulang kali, dengan latar belakang matahari terbenam di Pura Uluwatu.', 'schedule' => '12.00 - 14.00', 'image' => 'asset/gambar-atraksi/kecak-uluwatu.png', 'image_1' => 'asset/gambar-atraksi/kecak-uluwatu.png', 'image_2' => 'asset/gambar-atraksi/kecak-uluwatu.png'],
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
