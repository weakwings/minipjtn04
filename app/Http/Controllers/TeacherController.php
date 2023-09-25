<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->email = $request->email;
        $teacher->age = $request->age;
        $teacher->age = $request->age;
        $teacher->city = $request->city;
        $teacher->save();

        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teacher.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->email = $request->email;
        $teacher->age = $request->age;
        $teacher->age = $request->age;
        $teacher->city = $request->city;
        $teacher->save();

        return redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('/teacher');
    }
}
