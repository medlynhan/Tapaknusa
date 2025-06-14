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
            'email_verified_at'  => now(),
            'password'           => bcrypt('Midi3005'),
            'remember_token'     => Str::random(10),
        ]);

         DB::table('msattractions')->insert([
            [
                'title'             => 'Air Terjun Surodipo',
                'destination'       => 'Girisubo, Gunungkidul',
                'status'            => 'Open',
                'rating'            => 4.5,
                'startPrice'        => '50.000',
                'address'           => 'Dusun Surodipo, Desa Girisubo',
                'schedule'          => '2025-06-01',
                'description'       => 'Air terjun setinggi 25 m dengan pemandangan asri.',
                'operational_hours' => '08:00–17:00',
                'image1'            => 'surodipo1.jpg',
                'image2'            => 'surodipo2.jpg',
                'image3'            => 'surodipo3.jpg',
                'created_at'        => $now,
                'updated_at'        => $now,
            ],
            [
                'title'             => 'Candi Sukuh',
                'destination'       => 'Ngargoyoso, Karanganyar',
                'status'            => 'Open',
                'rating'            => 4.0,
                'startPrice'        => '40.000',
                'address'           => 'Dusun Sukuh, Kecamatan Ngargoyoso',
                'schedule'          => '2025-06-05',
                'description'       => 'Candi berarsitektur unik di lereng Gunung Lawu.',
                'operational_hours' => '07:00–16:00',
                'image1'            => 'sukuh1.jpg',
                'image2'            => 'sukuh2.jpg',
                'image3'            => 'sukuh3.jpg',
                'created_at'        => $now,
                'updated_at'        => $now,
            ],
            [
                'title'             => 'Pantai Sundak',
                'destination'       => 'Tepus, Gunungkidul',
                'status'            => 'Open',
                'rating'            => 4.7,
                'startPrice'        => '30.000',
                'address'           => 'Dusun Sundak, Desa Purwodadi',
                'schedule'          => '2025-06-10',
                'description'       => 'Pantai pasir putih dengan ombak tenang.',
                'operational_hours' => '06:00–18:00',
                'image1'            => 'sundak1.jpg',
                'image2'            => 'sundak2.jpg',
                'image3'            => 'sundak3.jpg',
                'created_at'        => $now,
                'updated_at'        => $now,
            ],
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
