<?php

namespace Database\Seeders;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;    

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('msusers')->insert([
            'name'           => 'Madeline',
            'email'              => 'madeline@example.com',
            'email_verified_at'  => now(),
            'password'           => bcrypt('Midi3005'),
            'remember_token'     => Str::random(10),
        ]);
    }
}
