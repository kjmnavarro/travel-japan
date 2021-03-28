@extends('layouts.app')

@section('title', 'Japan - Sapporo')

@section('content')

    <div id="banner-sapporo">
        <div class="place-text">
            <h1>Sapporo</h1>
            <p>Sapporo is the capital of Hokkaido and Japan's fifth largest city.</p>
            <span>Temp: <span class="text-warning">{{ $sapporo_data['main']['temp'] - 273.15}} &deg;C</span></span><br>
            <span>Clouds: <span class="text-warning">{{ $sapporo_data['clouds']['all'] }}%</span></span><br>
            <span>Temp: <span class="text-warning">{{ $sapporo_data['main']['humidity'] }}%</span></span><br>
            <span>Pressure: <span class="text-warning">{{ $sapporo_data['main']['pressure'] }}hPa</span></span><br>
            <span>Wind Direction: <span class="text-warning">{{ $sapporo_data['wind']['deg'] }}&deg;</span></span><br>
            <span>Wind Speed: <span class="text-warning">{{ $sapporo_data['wind']['speed'] }}m/s</span></span><br>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center pt-5 mt-5">
                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                <h1 class="font-weight-bold mt-3">We help you planning your itinerary</h1>
                <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</i></p>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-md-8 pl-0 pr-0 pb-0 mb-0">
                <div class="attr1 attr_sapporo1"></div>
            </div>
            <div class="col-md-4 pb-0 mb-0 pl-0 pr-0">
                <div class="d-flex flex-column">
                    <div class="text-center p-5">
                        <i class="fa fa-camera" aria-hidden="true"></i>
                        <h1 class="font-weight-bold mt-3">Attractions</h1>
                        <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</i></p>
                    </div>
                  <div class="attr2 attr_sapporo2 pr-0 pl-0"></div>
                </div>
            </div>

            <div class="col-md-4 pb-0 mb-0 pr-0 pl-0">
                <div class="d-flex flex-column">
                    <div class="text-center p-5">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <h1 class="font-weight-bold mt-3">Accomodation</h1>
                        <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</i></p>
                    </div>
                  <div class="acco1 acco_sapporo1 pr-0 pl-0"></div>
                </div>
            </div>

            <div class="col-md-8 pr-0 pl-0 pb-0 mb-0">
                <div class="acco2 acco_sapporo2"></div>
            </div>

            <div class="col-md-4 pr-0 pl-0 pb-0 mb-0">
                <div class="food1 food_sapporo1 pr-0 pl-0"></div>
            </div>

            <div class="col-md-4 p-5">
                <div class="text-center p-5">
                    <i class="fa fa-spoon" aria-hidden="true"></i>
                    <i class="fa fa-spoon" aria-hidden="true"></i>
                    <h1 class="font-weight-bold mt-3">Food</h1>
                    <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</i></p>
                </div>
            </div>

            <div class="col-md-4 pr-0 pl-0 pb-0 mb-0">
                 <div class="food2 food_sapporo2 pr-0 pl-0"></div>
            </div>

            <div class="col-md-12 mt-5 pt-5 pb-5 mb-5 text-center">
                <i class="fa fa-commenting" aria-hidden="true"></i>
                <h1 class="font-weight-bold mt-3">Share with us or simply browse different experience</h1>
                <p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</i></p>
                <button class="btn btn-tgp">Share your adventure</button>
            </div>

        </div>
    </div>
    

@endsection
