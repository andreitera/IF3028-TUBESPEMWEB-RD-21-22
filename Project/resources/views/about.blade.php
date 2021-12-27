
@extends('main')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
    <title>About Us</title>
@endsection

@section('body')
    <div class="container">
        <h1>Kelompok 4 PemWeb</h1>
        <div class="cards-container">
            <div class="card">
                <img src="{{asset('img/foto_arief.jpg')}}" alt="foto_arief" width="250" height="250">
                <div>
                    <h3>Muhammad Ariefuddin Satria Dharma</h3>
                    <h3>119140149</h3>
                </div>
            </div>
            <div class="card">
                <img src="{{asset('img/foto_della.jpg')}}" alt="foto_della" width="250" height="250">
                <div>
    
                    <h3>Della Salsabila</h3>
                    <h3>119140071</h3>
                </div>
            </div>
        </div>
    </div>
@endsection