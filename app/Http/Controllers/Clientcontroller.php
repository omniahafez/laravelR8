<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Traits\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;



class Clientcontroller extends Controller
{
    use UploadFile;
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

$messages = $this->erMsg();

        $data = $request->validate([

'clientName'=> 'required|max:100|min:5',
'phone'=> 'required|min:11',
'email'=> 'required|email:rfc',
'website'=> 'required',
'city'=> 'required|max:30',
'image'=>'required',
        ],$messages);

  // Store the image      
//$imgExt = $request->image->getClientOriginalExtension();
//$fileName = time().'.' . $imgExt;

//$path = 'assets/images';

//$request->image->move($path, $fileName);
$fileName= $this->upload($request->image, 'assets/images');
$data['image'] = $fileName;

// Handle the active checkbox
$data['active'] = isset ($request->active);

        
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
        $client = Client::findOrFail($id);
        $messages = $this->erMsg();
        $data = $request->validate([

            'clientName'=> 'required|max:100|min:5',
            'phone'=> 'required|min:11',
            'email'=> 'required|email:rfc',
            'website'=> 'required',
            'city'=> 'required|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image
        ],$messages);
// Handle the active checkbox

//dd($data);
        $data['active'] = isset ($request->active);

// Handle image upload
if (isset($request->image) && $request->hasFile('image')) {
    // Delete the old image if it exists
    if (isset($client->image) && $client->image) {
        $oldImagePath =('assets/images/' . $client->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
    }

    // Store the new image

   // $newImage = $request->image->getClientOriginalExtension();
//$fileName = time().'.' . $newImage;

//$path = 'assets/images';

//$request->image->move($path, $fileName);
$fileName= $this->upload($request->image, 'assets/images');
        $data['image'] = $fileName;
} else {
    // Keep the old image if no new image is uploaded
    $data['image'] = $client->image;
}



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

    public function erMsg()
    {
return[
    'clientName.required' =>'the client name is missed',
    'clientName.min' =>'the client name must be more than 5 char',
    
    ];


    }

}
