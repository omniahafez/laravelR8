<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class Clientcontroller extends Controller
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
        return view('clientForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$client = new Client();
        //$client->clientName = "omnia";
        //$client->phone = "0346676";
       // $client->email = "gg@mm.com";
        //$client->website = "www.omom.eg";
        //$client->save();
        //return 'inserted succ';
        $client= new Client();
        $client->clientname =$request->input('name');
        $client->phone = $request->input('phone');
        $client->email = $request->input('email');
        $client->website = $request->input('website');
        $client->save();
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
