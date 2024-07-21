@extends('layouts.main')

@section('content')

    <div>
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
    </div>

@endsection
