<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'phone' => '+998908319755',
            'user_id' => 1,
            'date' => '2023-01-13',
            'time' => '23:00:00',
            'people' => 4,
            'message' => '/////'
        ]);
    }
}
