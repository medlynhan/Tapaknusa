<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('msusers')->insert([
            ['name' => 'Andi Wijaya', 'email' => 'andi.wijaya@example.com', 'password' => Hash::make('hashed_password_1')],
            ['name' => 'Siti Nurhaliza', 'email' => 'siti.nurhaliza@example.com', 'password' => Hash::make('hashed_password_2')],
            ['name' => 'Budi Santoso', 'email' => 'budi.santoso@example.com', 'password' => Hash::make('hashed_password_3')],
            ['name' => 'Dewi Lestari', 'email' => 'dewi.lestari@example.com', 'password' => Hash::make('hashed_password_4')],
            ['name' => 'Rudi Hartono', 'email' => 'rudi.hartono@example.com', 'password' => Hash::make('hashed_password_5')],
            ['name' => 'Maya Sari', 'email' => 'maya.sari@example.com', 'password' => Hash::make('hashed_password_6')],
            ['name' => 'Taufik Hidayat', 'email' => 'taufik.hidayat@example.com', 'password' => Hash::make('hashed_password_7')],
            ['name' => 'Indah Pertiwi', 'email' => 'indah.pertiwi@example.com', 'password' => Hash::make('hashed_password_8')],
            ['name' => 'Joko Prasetyo', 'email' => 'joko.prasetyo@example.com', 'password' => Hash::make('hashed_password_9')],
            ['name' => 'Rina Puspita', 'email' => 'rina.puspita@example.com', 'password' => Hash::make('hashed_password_10')],
            ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'password' => '$2y$12$1IQcED5f4goUTMUGmTGg/.VpyK/NIwezQOT44Jzk4.vU5bOabjBUO'],
            ['name' => 'Madeline', 'email' => 'midiline30@gmail.com', 'password' => 'Midi3005'],
        ]);
    }
}
