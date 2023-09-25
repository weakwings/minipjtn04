<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();

        return view('student.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->city = $request->city;
        $student->address = $request->address;
        $student->courses()->sync($request->input('courses'));
        $student->save();

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $courses = Course::all();

        return view('student.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->city = $request->city;
        $student->address = $request->address;
        $student->courses()->sync($request->input('courses'));
        $student->save();

        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/student');
    }
}
