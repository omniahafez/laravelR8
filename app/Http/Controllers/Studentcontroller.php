<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    private $colums =['studentName', 'age'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= Student::get ();
        return view ('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addstudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$student = new Student();
       // $student->studentname =$request->input('name');
        //$student->age = $request->input('age');
        //$student->save();
        //return 'Inserted';

        student::create ($request->only($this->colums));
        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
