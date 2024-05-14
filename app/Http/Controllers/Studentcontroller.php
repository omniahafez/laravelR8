<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    //private $colums =['studentName', 'age'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->get();
 
        return view('students', ['students' => $students]);
    
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

        DB::table('students')->insert([
            'studentName' => $request->input('studentName'),
            'age' => $request->input('age'),
        ]);

        return redirect('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve the student record from the database based on the ID
    $student = DB::table('students')->where('id', $id)->first();

    // Check if the student record exists
    if ($student) {
        // If the student record exists, return a view with the student data
        return view('showStudent', ['student' => $student]);
    } else {
        // If the student record does not exist, return a 404 not found response or any appropriate response
        abort(404);
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
    return view('editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Retrieve data from the request
    $studentName = $request->input('studentName');
    $age = $request->input('age');
    
    // Update the record in the students table
    DB::table('students')
        ->where('id', $id)
        ->update([
            'studentName' => $studentName,
            'age' => $age,
        ]);

    // Redirect back to the students page or any other appropriate page
    return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
      // Retrieve the ID of the student to be deleted from the request
    $id = $request->input('id');

    // Delete the record from the students table based on the ID
    DB::table('students')->where('id', $id)->delete();

    // Redirect back to the students page or any other appropriate page
    return redirect('students');
    }  
}
