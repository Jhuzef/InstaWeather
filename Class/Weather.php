<?php

class Weather {
    public static function Call(string $key) {
        $url = 'https://api.openweathermap.org/data/2.5/weather?zip=07043,us&APPID=' . $key;
        $array = json_decode(file_get_contents($url), true);

        return $array;
    }
    public static function GetCurrentWeather(Array $data) {
        return Weather::KelvinToFahrenheit($data['main']['temp']);
    }

    public static function KelvinToFahrenheit(int $kelvin) {
        if ( !is_numeric($kelvin) ) { return false; }
        return round((($kelvin - 273.15) * 1.8) + 32);
    }
}
