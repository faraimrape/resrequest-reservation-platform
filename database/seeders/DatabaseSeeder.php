<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PropertySeeder::class,
            RoomSeeder::class,
            ReservationSeeder::class,
            GuestSeeder::class,
        ]);
    }
}
