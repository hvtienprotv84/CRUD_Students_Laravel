<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:5|max:100',
            'lop' => 'required|min:5|max:100',
            'phone' => 'required|min:5|max:100',
            'email' => 'required|min:5|max:100',
        ]);

        Student::create($data);

        return redirect()->route('students.index')
            ->with('success', 'Đã Thêm Học Sinh Thành Công');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required|min:5|max:100',
            'lop' => 'required|min:5|max:100',
            'phone' => 'required|min:5|max:100',
            'email' => 'required|min:5|max:100',
        ]);

        $student->update($data);

        return redirect()->route('students.index')
            ->with('success', 'Đã Cập Nhật Học Sinh Thành Công');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Đã Xóa Học Sinh Thành Công');
    }
}
