<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactClient;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;





class Mycontroller extends Controller
{
    public function receiveForm1(Request $request)
    {
        $firstName = $request->input('name');
        $lastName = $request->input('lname');

        return view('show_form_data', compact('firstName', 'lastName'));
    }
//create session with name test and value my first session
    public function myVal(){

session()->put('test', 'my first session');
return"session created";

    }

    //restore session with name test 
    public function restoreVal(){

        return"my session value is". session('test');
        
            }
//remove only one session with its name
            public function deleteVal(){

                session()->forget('test');
                return"session removed";
                
                    }
//remove all sessions
                    public function deleteAllSession(){

                        session()->flash('test');
                        return"All session removed";
                        
                            }


                            //create flas session with name test1 and value my first session
    public function myValFlas(){

        session()->flash('test1', 'my first session');
        return"session created";
        
            }


            //restore flash session with name test1 
    public function restoreValFlash(){

        return"my session value is". session('test1');
        
            }



public function sendClientMail(){
$data = Client::findOrFail(1)->toArray();
$data['the message']= "my message";
Mail::to($data['email'])->send(
    new ContactClient($data)
);
return"mail send";

}

// public function testimonial(){
//     $data = Client::findOrFail(1)->toArray();
//     $data['the message']= "my message";
//     Mail::to($data['email'])->send(
//         new ContactClient($data)
//     );
//     return"mail send";
    
//     }

public function showForm()
{
    return view('contact');
}

public function sendMail(Request $request)
{
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];

    Mail::to('recipient@example.com')->send(new ContactMail($details));

    //return back()->with('success', 'Your message has been sent successfully!');
    return"mail send";
}



}


