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

                DB::table('msattraction')->insert([
            [
                'name'        => 'Air Terjun Surodipo',
                'description' => 'Air terjun setinggi 25 m di kaki Gunung Lawu, cocok untuk hiking dan piknik keluarga.',
                'location'    => 'Girisubo, Gunungkidul, Yogyakarta',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Candi Sukuh',
                'description' => 'Candi berarsitektur unik di lereng Gunung Lawu, penuh relief misterius.',
                'location'    => 'Tosan, Kecamatan Ngargoyoso, Karanganyar',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            // ... tambahkan attraction lainnya
        ]);

        // 2. Seed msttickettypes (asumsikan attraction id 1 & 2 ada)
        DB::table('msttickettypes')->insert([
            [
                'attraction_id' => 1,
                'type_name'     => 'Dewasa',
                'price'         => 50000,
                'stock'         => 100,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'attraction_id' => 1,
                'type_name'     => 'Anak-anak',
                'price'         => 30000,
                'stock'         => 50,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'attraction_id' => 2,
                'type_name'     => 'General',
                'price'         => 40000,
                'stock'         => 80,
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);

        // 3. Seed msusers (jika belum ada)
        DB::table('msusers')->insert([
            [
                'name'              => 'Madeline',
                'email'             => 'madeline@example.com',
                'email_verified_at' => $now,
                'password'          => bcrypt('Midi3005'),
                'remember_token'    => Str::random(10),
                'created_at'        => $now,
                'updated_at'        => $now,
            ],
            // ... user lain jika perlu
        ]);

        // 4. Seed msreviews (foreign ke attraction dan user)
        DB::table('msreviews')->insert([
            [
                'attraction_id' => 1,
                'user_id'       => 1,
                'rating'        => 5,
                'comment'       => 'Sangat indah dan airnya segar!',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            // ... review lain
        ]);

        // 5. Seed usercart (foreign ke user dan ticket types)
        DB::table('usercart')->insert([
            [
                'user_id'        => 1,
                'ticket_type_id' => 1,
                'quantity'       => 2,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
            // ... cart item lain
        ]);

        // 6. Seed mshistory (foreign ke user dan ticket types)
        DB::table('mshistory')->insert([
            [
                'user_id'        => 1,
                'ticket_type_id' => 1,
                'quantity'       => 2,
                'total_price'    => 2 * 50000,
                'purchased_at'   => $now,
                'created_at'     => $now,
                'updated_at'     => $now,
            ],
            // ... history lain
        ]);

    }
}
