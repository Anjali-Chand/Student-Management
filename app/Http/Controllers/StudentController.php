<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Student $student)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Student $student)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Student $student)
    // {
    //     //
    // }


public function index()
{
    $students = Student::all();

    return view('students.index', compact('students'));
}

public function create()
{
    return view('students.create');
}



public function edit(Student $student)
{
    return view('students.edit', compact('student'));
}


public function destroy(Student $student)
{
    $student->delete();

    return redirect('/students');
}

public function store(Request $request)
{
    $request->validate([
    'name' => 'required',
    'email' => 'required|email|unique:students,email',
    'course' => 'required'
]);

  Student::create([
    'name' => $request->name,
    'email' => strtolower($request->email),
    'course' => $request->course
]);

    return redirect('/students');
}

public function update(Request $request,
                       Student $student)
{
  

$request->validate([
    'name' => 'required',
    'email' => [
        'required',
        'email',
        Rule::unique('students')->ignore($student->id),
    ],
    'course' => 'required'
]);

    $student->update([
    'name' => $request->name,
    'email' => $request->email,
    'course' => $request->course
]);
    return redirect('/students');
}



}
