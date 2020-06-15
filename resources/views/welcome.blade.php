<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('styles.css')}}">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height pull-up">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Weather Information
                </div>
                <div class="selection">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('load.weather.data','dar')}}" class="btn btn-block btn-warning" id="dsm">Dar es salaam</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('load.weather.data','tanga')}}" class="btn btn-block btn-danger" id="tanga">Tanga</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{route('load.weather.data','arusha')}}" class="btn btn-block btn-dark" id="arusha">Arusha</a>
                        </div>
                    </div>
                </div>

                <div class="links mt-5">
                    <div class="card mx-auto">
                        <div class="card-header d-flex flex-nowrap justify-content-between">
                            <div class="day">{{$day}}</div>
                            <div class="date">{{$date}}</div>
                        </div>
                        <div class="row city p-4 d-flex justify-content-start">
                            <div class="col-md-4">{{$city}}</div>
                        </div>
                        <div class="row main-temp">
                            <div class="col-md-4 col-6">
                                <h2>{{$temp}}<sup>0</sup> C </h2>
                            </div>
                            <div class="col-md-4 col-6 weather">
                                {{$weather}}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4 col-4">
                                <img src="/icons/min.png" style="width:auto;height:22px" alt="icon" srcset="">
                                {{$min}} <sup>0</sup> C
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="/icons/max.png" style="width:auto;height:22px" alt="icon" srcset="">
                                {{$max}} <sup>0</sup> C
                            </div>
                            <div class="col-md-4 col-4">
                                <img src="/icons/icon-wind.png" alt="icon" srcset="">
                                {{$wind}} km/h
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
