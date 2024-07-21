@php
    use Carbon\Carbon; // đây là thư viện để hiển thị theo múi giờ việt nam cho mục "created_at" là "Ngày Tạo"
@endphp

@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center total_students">
        <h2>
            Tổng Số Học Sinh: {{ $students->total() }}
        </h2>
        <a href="{{ route('students.create') }}">Thêm Học Sinh</a>
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
            margin-top: -50px;
        }
    </style>
@endsection
