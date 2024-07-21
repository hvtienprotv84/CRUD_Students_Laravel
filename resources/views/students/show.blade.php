@extends('layouts.main')

@section('content')

    <div class="container_detail_students">
        <h2>Xem Chi Tiết Học Sinh</h2>

        <p class="mt-5">
            <strong>Họ và Tên:</strong>
            <span>{{ $student->name }}</span><br/>
            <strong>Lớp:</strong>
            <span>{{ $student->lop }}</span><br/>
            <strong>Phone:</strong>
            <span>{{ $student->phone }}</span><br/>
            <strong>Email:</strong>
            <span>{{ $student->email }}</span>
        </p>

        <button id="button2">
            <a href="/students" id="button_back_home">
    <span id="home1" style="font-size: 15px;">Trang Chủ</span>
    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg" >
        <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
    </svg>
    </a>
</button>

    </div>

    <style>
        .container_detail_students{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 100% !important;
        }
        p{
            font-size: 30px;
        }
        span{
            font-size: 30px;
        }

        #button2 {
            position: absolute;
            top: 0;
            margin-top: 110px;
            right: 0;
            margin-right: 10px;
            cursor: pointer;
            font-weight: 700;
            font-family: Helvetica,"sans-serif";
            transition: all .2s;
            padding: 10px 20px;
            border-radius: 100px;
            background: #cfef00;
            border: 1px solid transparent;
            display: flex;
            align-items: center;
            font-size: 15px;
            }

            #button2:hover {
            background: #c4e201;
            }

            #button2 > svg {
            width: 34px;
            margin-left: 10px;
            transition: transform .3s ease-in-out;
            }

            #button2:hover svg {
            transform: translateX(5px);
            }

            #button2:active {
            transform: scale(0.95);
            }
            #button_back_home{
                text-decoration: none;
                color: black;
            }

    </style>

@endsection
