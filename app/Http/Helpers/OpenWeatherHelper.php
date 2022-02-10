<?php

namespace App\Http\Helpers;

use App\Models\City;
use App\Models\OpenWeather;
use App\Models\Weather;
use Carbon\Carbon;
use PHPUnit\Exception;

class OpenWeatherHelper{

    public static function get_data_and_send_to_database()
    {
        try {
            $cities = City::where('active', true)->get();
            foreach ($cities as $city) {
                $data = OpenWeather::get($city->latitude, $city->longitude);
                $wheather = new Weather();
                $wheather->longitude = $data['coord']['lon'];
                $wheather->latitude = $data['coord']['lat'];
                $wheather->temp = $data['main']['temp'];
                $wheather->temp_min = $data['main']['temp_min'];
                $wheather->temp_max = $data['main']['temp_max'];
                $wheather->pressure = $data['main']['pressure'];
                $wheather->humidity = $data['main']['humidity'];
                $wheather->name = $data['name'];
                $wheather->time = Carbon::now();
                $wheather->save();
            }
            return true;
        } catch (Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
