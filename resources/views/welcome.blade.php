@extends('layouts.main')

@section('content')

    <div class="bg-transparent p-5 rounded">
        <h1>Laravel 11 - CRUD Students</h1>
         <!-- <div>
            <img id="img" src="../logo_1.png"/>
         </div> -->
        <div class="container_img">
            <img id="img" src="https://static-00.iconduck.com/assets.00/laravel-icon-497x512-uwybstke.png"/>
            <img id="img" src="https://www.pngkey.com/png/full/269-2693201_mysql-logo-circle-png.png"/>
        </div>
    </div>

    <style>
        .container_img{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1{
            font-size: 50px;
        }
        #img{
            width: 400px !important;
            margin-left: 50px;
        }
    </style>
@endsection