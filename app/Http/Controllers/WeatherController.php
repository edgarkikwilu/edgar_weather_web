<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Carbon\Carbon;

class WeatherController extends Controller
{
    public function loadWWeatherData(Request $request){



        $response = Http::get('api.openweathermap.org/data/2.5/weather?q=dar&appid=dec4fa76ff428e8c3a0a6a6152d352cd');
        $body = json_decode($response->body());
        $temp = $this->fahrenheitToCelcius($body->main->temp);
        $max = $this->fahrenheitToCelcius($body->main->temp_max);
        $min = $this->fahrenheitToCelcius($body->main->temp_min);
        $wind = $body->wind->speed;
        $weather = $body->weather[0]->main;
        $city = "Dar es salaam";

        if($request->city=='dar'){$city = "Dar es salaam";}
        elseif ($request->city=='tanga') {$city="Tanga";}
        else {$city="Arusha";}

        $today = Carbon::now();

        $day = $today->isoFormat('dddd');
        $date = $today->isoFormat('MMM Do YY');

        // dd($body);
        // // dd($wind);
        return view('welcome')->withTemp($temp)->withMax($max)->withMin($min)->withWind($wind)->withWeather($weather)->withDay($day)->withDate($date)->withCity($city);
    }

    private function fahrenheitToCelcius($temp){
        $centigrade = ($temp-32)*(5/9);
        return round($centigrade);
    }
}
