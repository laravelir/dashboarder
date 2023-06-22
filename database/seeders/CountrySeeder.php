<?php

namespace Laravelir\Dashboarder\Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {

        $Country1 = Country::create([
            'email' => 'testCountry@gmail.com',
            'Countryname' => 'testCountry',
            'password' => '12344321',
            'mobile' => '09376686366',
            'is_admin' => false,
        ]);
    }
}
