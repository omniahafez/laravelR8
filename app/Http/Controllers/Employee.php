<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
       
        //$employee= new Employee();
        //$employee->emloyeename =$request->input('name');
        //$employee->phone = $request->input('phone');
       // $employee->email = $request->input('email');
       // $employee->website = $request->input('website');
       // $employee->city =$request->input('city');
       // $employee->address = $request->input('address');
       // $employee->salery = $request->input('salery');
       // $employee->active = $request->input('active');
       // $employee->image = $request->input('image');
       // $employee->save();
       // return 'Inserted';


        $employee= new Employee();
        $employee->emloyeename =('omnia');
        $employee->phone = ('0654542312');
        $employee->email =('mddf@hghg');
        $employee->website =('www.vgfg@hg.eg');
        $employee->city =('giza');
        $employee->address =('hfgf hff');
        $employee->salery = ('5000');
        $employee->active = ('true');
        $employee->image = ('image');
        $employee->save();
        return 'Inserted';
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
