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
    	$appkey = env('APP_ID_KIEFFER','');
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Tokyo&appid=".$appkey;
		$json = file_get_contents($url);
		$tokyo_data = json_decode($json, true);

        return view('places.tokyo', [
            'tokyo_data' => $tokyo_data
        ]);
    }

    public function yokohama()
    {
    	$appkey = env('APP_ID_KIEFFER','');
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Yokohama&appid=".$appkey;
		$json = file_get_contents($url);
		$yokohama_data = json_decode($json, true);

        return view('places.yokohama', [
            'yokohama_data' => $yokohama_data
        ]);
    }

    public function kyoto()
    {
    	$appkey = env('APP_ID_KIEFFER','');
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Kyoto&appid=".$appkey;
		$json = file_get_contents($url);
		$kyoto_data = json_decode($json, true);

        return view('places.kyoto', [
            'kyoto_data' => $kyoto_data
        ]);
    }

    public function osaka()
    {
    	$appkey = env('APP_ID_KIEFFER','');
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Osaka&appid=".$appkey;
		$json = file_get_contents($url);
		$osaka_data = json_decode($json, true);

        return view('places.osaka', [
            'osaka_data' => $osaka_data
        ]);
    }

    public function sapporo()
    {
    	$appkey = env('APP_ID_KIEFFER','');
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Sapporo&appid=".$appkey;
		$json = file_get_contents($url);
		$sapporo_data = json_decode($json, true);

        return view('places.sapporo', [
            'sapporo_data' => $sapporo_data
        ]);
    }

    public function nagoya()
    {
    	$appkey = env('APP_ID_KIEFFER','');
    	$url = "https://api.openweathermap.org/data/2.5/weather?q=Nagoya&appid=".$appkey;
		$json = file_get_contents($url);
		$nagoya_data = json_decode($json, true);

        return view('places.nagoya', [
            'nagoya_data' => $nagoya_data
        ]);
    }
}
