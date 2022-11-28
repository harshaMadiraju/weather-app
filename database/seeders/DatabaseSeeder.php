<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\cities::truncate();

        // $cities = json_decode(file_get_contents(storage_path('app/cities.json')), true);
        // foreach ($cities as $row) {
        //     //city	city_ascii	lat	lng	country	iso2	iso3	admin_name	capital	population	id
        //     \App\Models\cities::create([
        //         'city' => $row['city'],
        //         'city_ascii' => $row['city_ascii'],
        //         'lat' => $row['lat'],
        //         'lng' => $row['lng'],
        //         'country' => $row['country'],
        //         'iso2' => $row['iso2'],
        //         'iso3' => $row['iso3'],
        //         'admin_name' => $row['admin_name'],
        //         'capital' => $row['capital'],
        //         'population' => $row['population'],
        //         'id' => $row['id']
        //     ]);
        // }

        \App\Models\WeatherCodes::truncate();

        \App\Models\WeatherCodes::insert([
            [
                'code'=>0,
                'category'=>'sky',
                'description'=>'clear sky',
                'icon'=>'',
                'bg_img'=>''

            ],
            [
                'code'=>1,
                'category'=>'sky',
                'description'=>'mainly clear',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>2,
                'category'=>'sky',
                'description'=>'partly cloudy',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>3,
                'category'=>'sky',
                'description'=>'overcast',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>45,
                'category'=>'fog',
                'description'=>'fog',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>48,
                'category'=>'fog',
                'description'=>'depositing rime fog',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>51,
                'category'=>'rain',
                'description'=>'light drizzles, moderate, and dense intensity',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>53,
                'category'=>'rain',
                'description'=>'moderate drizzles',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>55,
                'category'=>'rain',
                'description'=>'dense intensity drizzles',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>56,
                'category'=>'rain',
                'description'=>'light freezing drizzles',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>57,
                'category'=>'rain',
                'description'=>'dense intensity drizzles',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=> 61,
                'category'=>'rain',
                'description'=>'slight rain',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>63,
                'category'=>'rain',
                'description'=>'moderate rain',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>65,
                'category'=>'rain',
                'description'=>'heavy intensity rain',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>66,
                'category'=>'rain',
                'description'=>'Light Freezing Rain',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>67,
                'category'=>'rain',
                'description'=>'heavy intensity Freezing Rain',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>71,
                'category'=>'snow',
                'description'=>'slight snowfall',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>73,
                'category'=>'snow',
                'description'=>'moderate snowfall',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>75,
                'category'=>'snow',
                'description'=>'Sheavy intensity snowfall',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>77,
                'category'=>'snow',
                'description'=>'Snow grains',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>80,
                'category'=>'rain',
                'description'=>'slight rain showers',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>81,
                'category'=>'rain',
                'description'=>'moderate rain showers',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>82,
                'category'=>'rain',
                'description'=>'violent rain showers',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>85,
                'category'=>'snow',
                'description'=>'slight snow showers',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>86,
                'category'=>'snow',
                'description'=>'heavy snow showers ',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>95,
                'category'=>'rain',
                'description'=>'Thunderstorm: Slight or moderate',
                'icon'=>'',
                'bg_img'=>''
            ],
            [
                'code'=>96,
                'category'=>'rain',
                'description'=>'Thunderstorm with slight and heavy hail',
                'icon'=>'',
                'bg_img'=>''
            ],
        ]);


    }
}
