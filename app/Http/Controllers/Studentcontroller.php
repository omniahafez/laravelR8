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
        $students = DB::table('students')->whereNull('deleted_at')->get();
 
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
        $studentData = $request->validate([
            'studentName' => 'required|min:5|max:100',
            'age' => 'required|min:1|max:40',
        ]);
        DB::table('students')->insert([
            'studentName' => $studentData['studentName'],
            'age' => $studentData['age'],
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
        $studentData = $request->validate([
            'studentName' => 'required|min:5|max:100',
            'age' => 'required|min:1|max:40',
        ]);


         // Retrieve data from the validated
         $studentName = $studentData['studentName'];
         $age = $studentData['age'];
    
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
// Perform soft delete by updating the deleted_at column
$deleted = DB::table('students')->where('id', $id)->update(['deleted_at' => now()]);

if ($deleted) {
    // Redirect back to the students page with a success message
    return redirect('students')->with('success', 'Student soft deleted successfully.');
} else {
    // Redirect back with an error message if the student was not found or not deleted
    return redirect('students')->with('error', 'Failed to soft delete student.');
}
}

    /**
     * trash.
     */
    public function trash()
    {
        $trashed = Student::onlyTrashed()->get();
    return view('trashStudents', compact('trashed'));
    }

    /**
    * restore.
    */
   public function restore(string $id)
   {
    Student:: where('id', $id)->restore();
    return redirect('students');
   }

   /**
     * forcedelete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;

    $deleted = DB::table('students')->where('id', $id)->delete();

    if ($deleted) {
        return redirect('trashStudents')->with('success', 'Student permanently deleted successfully.');
    } else {
        return redirect('trashStudents')->with('error', 'Failed to permanently delete student.');
    }
    }

}
