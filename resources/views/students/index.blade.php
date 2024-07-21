@php
    use Carbon\Carbon; // đây là thư viện để hiển thị theo múi giờ việt nam cho mục "created_at" là "Ngày Tạo"
@endphp

@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center total_students">
        <h2>
            Tổng Số Học Sinh: {{ $students->total() }}
        </h2>
        <!-- <a href="{{ route('students.create') }}">Thêm Học Sinh</a> -->
        
        <a href="{{ route('students.create') }}">
        <button class="button">
        <svg fill="#ffffff" height="24px" width="24px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 370.126 370.126" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M142.046,176.296c48.594,0,88.128-39.542,88.128-88.146C230.174,39.544,190.64,0,142.046,0 C93.445,0,53.904,39.544,53.904,88.149C53.904,136.754,93.445,176.296,142.046,176.296z"></path> <path d="M285.366,257.497h-7.547c-0.158,0-0.336-0.069-0.453-0.144v-7.856c0-5.607-4.193-10-9.547-10h-1.28 c-5.515,0-10.173,4.579-10.173,10l-0.003,8h-7.997c-5.421,0-10,4.658-10,10.173v1.28c0,5.354,4.393,9.547,10,9.547h7.856 c0.074,0.117,0.144,0.295,0.144,0.453v7.547c0,5.421,4.658,10,10.173,10h1.28c5.353,0,9.547-4.393,9.547-10v-7.456 c0.078-0.186,0.357-0.466,0.544-0.544h7.456c5.607,0,10-4.193,10-9.547v-1.28C295.366,262.155,290.787,257.497,285.366,257.497z"></path> <path d="M267.211,185.921c-15.334,0-29.692,4.242-41.98,11.6c-0.191-0.006-0.382-0.023-0.573-0.023H59.419 c-10.711,0-20.73,8.256-22.811,18.797l-15.229,77.209c-1.97,9.978,2.857,22.581,10.99,28.692 c2.604,1.957,64.315,47.931,109.669,47.931c27.654,0,61.771-17.389,84.432-31.142c12.012,6.911,25.917,10.886,40.741,10.886 c45.201,0,81.975-36.773,81.975-81.975C349.186,222.694,312.413,185.921,267.211,185.921z M267.211,319.87 c-28.659,0-51.975-23.315-51.975-51.975c0-28.659,23.315-51.975,51.975-51.975s51.975,23.316,51.975,51.975 C319.186,296.555,295.871,319.87,267.211,319.87z"></path> </g> </g></svg>
        <span class="text">Thêm Học Sinh</span>
        </button>
        </a>


    </div>

    <div class="mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Họ và Tên</th>
                <th scope="col">Lớp</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Ngày Tạo</th>
                <th scope="col">Chức Năng</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lop }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <!-- <td>{{ $student->created_at }}</td> -->
                    <td>{{ Carbon::parse($student->created_at)->timezone('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('students.show', $student) }}">Chi Tiết</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('students.edit', $student) }}">Chỉnh Sửa</a>
                        <form class="d-inline" method="post" action="{{ route('students.destroy', $student) }}">
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc chắn khi xóa học sinh này?');"
                            >Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $students->links() }}
    </div>
    <style>
        .total_students{
            margin-top: 50px;
        }

        .button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 15px;
            gap: 15px;
            background-color: #007ACC;
            outline: 3px #007ACC solid;
            outline-offset: -3px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: 400ms;
            }

            .button .text {
            color: white;
            font-weight: 700;
            font-size: 1em;
            transition: 400ms;
            }

            .button svg path {
            transition: 400ms;
            }

            .button:hover {
            background-color: transparent;
            }

            .button:hover .text {
            color: #007ACC;
            }

            .button:hover svg path {
            fill: #007ACC;
            }
    </style>
@endsection
