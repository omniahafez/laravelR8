<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Clientcontroller extends Controller
{
    //private $colums =['clientName', 'phone', 'email', 'website'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients= Client::get ();
        return view ('clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        //$client= new Client();
       // $client->clientname =$request->input('name');
       // $client->phone = $request->input('phone');
        //$client->email = $request->input('email');
        //$client->website = $request->input('website');
        //$client->save();
        //return 'Inserted';
        $data = $request->validate([

'clientName'=> 'required|max:100|min:5',
'phone'=> 'required|min:11',
'email'=> 'required|email:rfc',
'website'=> 'required',
        ]);
        client::create($data);
        return redirect('clients');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
    return view('showClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
    return view('editClient', compact('client'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([

            'clientName'=> 'required|max:100|min:5',
            'phone'=> 'required|min:11',
            'email'=> 'required|email:rfc',
            'website'=> 'required',
                    ]);
       Client:: where('id', $id)->update($data);
       return redirect('clients');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Client:: where('id', $id)->delete();
        return redirect('clients');
    }

/**
     * trash.
     */
    public function trash()
    {
        $trashed = Client::onlyTrashed()->get();
    return view('trashClients', compact('trashed'));
    }
/**
    * restore.
    */
   public function restore(string $id)
   {
    Client:: where('id', $id)->restore();
    return redirect('clients');
   }
/**
     * forcedelete.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client:: where('id', $id)->forcedelete();
        return redirect('trashClients');
    }

}
