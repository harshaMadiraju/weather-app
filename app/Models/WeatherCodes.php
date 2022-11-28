<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class WeatherCodes extends Model
{

    protected $connection = 'mongodb';
    protected $collection = 'weather_codes';

    public static function getWeatherNameByCode($code)
    {
        return self::where('code',$code)->get()->toArray();
    }
}
