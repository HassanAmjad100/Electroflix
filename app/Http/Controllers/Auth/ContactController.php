<?php
namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function register(){
    return view('contact_us');
}

public function store(Request $request){

  $this->validate($request,[
      'fname'=> 'required|max:255',
      'lname'=>'required|max:255',
      'email'=>'required|email|max:255',
      'phone'=>'required|phone|max:255',
      'message'=>'required|message|max:255',
  ]);
Contacts::create([
    'fname'=>$request->name,
    'lname'=>$request->username, 
    'email'=>$request->email,
    'phone'=>$request->phone,
    'message'=>$request->message,
]);

//auth()->attempt([$request->only('email', 'password')]);
Auth()->attempt(['email' => $request, 'phone' => $request]);

return redirect()->route('contact_us');
}
    }

