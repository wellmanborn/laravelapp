<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class OpenWeather
{
    use HasFactory;

    protected $url = "";

    public static function get($latitude, $longitude){
        $url = env("OPENWEATHER_URL") .
            "?lat={$latitude}&lon={$longitude}&appid=" .
            env("OPENWEATHER_LICENSE");
        $response = Http::get($url);
        $data = json_decode($response, true);
        return $data;
    }
}
