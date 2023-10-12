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
        return response()->json($students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'city' => 'required',
            'address' => 'required',
            'courses' => 'required|array'
        ]);

        try {
            $student = new Student();
            $student->name = $request->name;
            $student->surname = $request->surname;
            $student->email = $request->email;
            $student->age = $request->age;
            $student->city = $request->city;
            $student->address = $request->address;
            $student->courses()->sync($request->input('courses'));
            $student->save();

            return response()->json($student, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $courses = Course::all();
        return response()->json(['student' => $student, 'courses' => $courses]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'city' => 'required',
            'address' => 'required',
            'courses' => 'required|array'
        ]);

        try {
            $student->name = $request->name;
            $student->surname = $request->surname;
            $student->email = $request->email;
            $student->age = $request->age;
            $student->city = $request->city;
            $student->address = $request->address;
            $student->courses()->sync($request->input('courses'));
            $student->save();

            return response()->json($student, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        try {
            $student->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
