<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use App\Models\TravelCompany;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAndTravelCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        $mainUser = User::create([
            'name' => "Ferdy Hahan Pradana",
            'email' => "ferdy@hape.com",
            'phone_number' => '087865825286',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $arrayUser = [];
        $arrayUser[] = $mainUser;
        for ($i = 1; $i <= 10; $i++) {
            $newUser = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => '0878658252' . $i,
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $arrayUser[] = $newUser;
        }

        for ($i = 0; $i < 5; $i++) {
            $newTravelCompany = TravelCompany::create([
                'name' => $faker->company,
                'email' => $faker->email,
                'address' => $faker->address,
                'phone_number' => '0878658252' . $i + 3,
                'description' => $faker->text,
                'user_id' => $arrayUser[$i]->id,
            ]);

            $userFind = User::find($newTravelCompany->user_id);
            $userFind->travel_company_id = $newTravelCompany->id;
            $userFind->save();
        }
    }
}
