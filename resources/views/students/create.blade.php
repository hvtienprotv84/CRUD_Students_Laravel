@extends('layouts.main')

@section('content')

    <div class="container_add_students">
        <h2>Thêm Học Sinh Mới</h2>

        <div class="row">
            <div class="">
                <form method="post" action="{{ route('students.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Họ và Tên:</label>

                        <input id="name" type="text" style="width: 500px;" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autofocus>

                               <label for="lop" class="col-form-label">Lớp:</label>

                        <input id="lop" type="text" class="form-control @error('lop') is-invalid @enderror"
                            name="lop" value="{{ old('lop') }}" required autofocus>

                        <label for="phone" class="col-form-label">Phone:</label>

                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                               name="phone" value="{{ old('phone') }}" required autofocus>

                               <label for="email" class="col-form-label">Email:</label>

                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">
                        Lưu
                    </button>
                </form>
            </div>
        </div>

        <button id="button2">
            <a href="/students" id="button_back_home">
    <span id="home1">Trang Chủ</span>
    <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg" >
        <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
        <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
    </svg>
    </a>
</button>

    </div>

    <style>
        .container_add_students{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 100% !important;
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
