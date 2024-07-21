@extends('layouts.main')

@section('content')

    <div>
        <h2>Edit student</h2>

        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('students.update', $student) }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Họ và Tên:</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name', $student->name) }}" required autofocus>

                        <label for="lop" class="col-form-label">Lớp:</label>
                        <input id="lop" type="text" class="form-control @error('lop') is-invalid @enderror"
                            name="lop" value="{{ old('lop', $student->lop) }}" required autofocus>

                        <label for="phone" class="col-form-label">Phone:</label>
                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                            name="phone" value="{{ old('phone', $student->phone) }}" required autofocus>

                        <label for="email" class="col-form-label">Email:</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email', $student->email) }}" required autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
