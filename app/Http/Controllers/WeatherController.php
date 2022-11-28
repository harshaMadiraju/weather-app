<?php

namespace App\Http\Controllers;

use App\Models\cities;
use App\Models\WeatherCodes;
use DateTime;
use Illuminate\Http\Request;
use MichaelNabil230\Weather\Weather;

class WeatherController extends Controller
{
    public function getDaily(Request $request)
    {
        $collection = $request->all();

        $city_id = (int)$collection['city'];

        $city = cities::where('id', '=', $city_id)->get()->toArray();

        $weatherDaily = Weather::location($city[0]['lat'], $city[0]['lng'])
            ->timezone('Asia/Kolkata')
            ->temperature_2mMax()
            ->temperature_2mMin()
            ->apparentTemperatureMax()
            ->apparentTemperatureMin()
            ->windSpeed_10mMax()
            ->dailyWeatherCode()
            ->sunrise()
            ->sunset()
            ->get();

        $weatherDaily = json_decode(json_encode($weatherDaily), true);

        $weatherToday = Weather::location($city[0]['lat'], $city[0]['lng'])
            ->timezone('Asia/Kolkata')
            ->date(new DateTime(),new DateTime())
            ->temperature_2m()
            ->apparentTemperature()
            ->dewPoint_2m()
            ->relativeHumidity_2m()
            ->pressureMsl()
            ->windSpeed_10m()
            ->hourlyWeatherCode()
            ->get();

        $weatherToday = json_decode(json_encode($weatherToday), true);


        foreach($weatherDaily['daily']['weathercode'] as $wdK=>$wdV){
            $weather_name=WeatherCodes::getWeatherNameByCode($wdV);
            $weatherDaily['daily']['weathercodeName'][$wdK]=$weather_name[0];
        }

        foreach($weatherToday['hourly']['weathercode'] as $whK=>$whV){
            $weather_name=WeatherCodes::getWeatherNameByCode($whV);
            $weatherToday['hourly']['weathercodeName'][$whK]=$weather_name[0];
        }

        // dd($weatherDaily,$weatherToday);

        $weather=array_merge(['weatherDaily'=>$weatherDaily],['city_info'=>$city[0]],['weatherToday'=>$weatherToday]);

        // dd($weather);

        // return view('forecast',['weather'=>$weather])->render();
        return view('forecast-new',['weather'=>$weather])->render();
    }
}
