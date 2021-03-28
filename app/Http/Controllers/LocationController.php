<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function tokyo()
    {
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Tokyo&appid=88745926801b5e99be5cdc7b1987238b";
		$json = file_get_contents($url);
		$tokyo_data = json_decode($json, true);

        return view('places.tokyo', [
            'tokyo_data' => $tokyo_data
        ]);
    }

    public function yokohama()
    {
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Yokohama&appid=88745926801b5e99be5cdc7b1987238b";
		$json = file_get_contents($url);
		$yokohama_data = json_decode($json, true);

        return view('places.yokohama', [
            'yokohama_data' => $yokohama_data
        ]);
    }

    public function kyoto()
    {
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Kyoto&appid=88745926801b5e99be5cdc7b1987238b";
		$json = file_get_contents($url);
		$kyoto_data = json_decode($json, true);

        return view('places.kyoto', [
            'kyoto_data' => $kyoto_data
        ]);
    }

    public function osaka()
    {
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Osaka&appid=88745926801b5e99be5cdc7b1987238b";
		$json = file_get_contents($url);
		$osaka_data = json_decode($json, true);

        return view('places.osaka', [
            'osaka_data' => $osaka_data
        ]);
    }

    public function sapporo()
    {
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Sapporo&appid=88745926801b5e99be5cdc7b1987238b";
		$json = file_get_contents($url);
		$sapporo_data = json_decode($json, true);

        return view('places.sapporo', [
            'sapporo_data' => $sapporo_data
        ]);
    }

    public function nagoya()
    {
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Nagoya&appid=88745926801b5e99be5cdc7b1987238b";
		$json = file_get_contents($url);
		$nagoya_data = json_decode($json, true);

        return view('places.nagoya', [
            'nagoya_data' => $nagoya_data
        ]);
    }
}
