<?php

namespace Database\Seeders;

use App\Models\TravelCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TravelTrip;


class TravelTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = ['Jakarta', 'Bandung', 'Surabaya', 'Semarang', 'Yogyakarta', 'Malang', 'Bali', 'Medan', 'Palembang', 'Makassar'];
        $price = [100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000];
        $departure_hours = 0;
        $arrival_hours = 1;
        foreach (TravelCompany::all() as $travel) {
            $departure_hours += 1;
            $arrival_hours += 1;
            for ($i = 0; $i < 2; $i++) {
                TravelTrip::create([
                    'departure_time' => $departure_hours . ':00:00',
                    'arrival_time' => $arrival_hours . ':00:00',
                    'departure_city' => $city[array_rand($city)],
                    'destination_city' => $city[array_rand($city)],
                    'departure_date' => now()->addDays($i),
                    'price' => $price[rand(0, count($price) - 1)],
                    'seat' => 50,
                    'travel_company_id' => $travel->id,
                ]);
            }
        }
    }
}
