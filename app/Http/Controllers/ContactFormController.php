<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactFormController extends Controller
{
    public function storeData(Request $request){
        $request->validate([
            'name'=>'required|string|min:3|max:255',
            'email'=>'required|string|max:255',
            'subject'=>'required|string|min:5|max:255',
            'message'=>'required|string|min:5'
        ]);

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
    
        // DB::table('contacts')->insert([
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'subject'=>$request->subject,
        //     'message'=>$request->message,
        // ]);
    
        return redirect()->back()->with('success', 'Form Submitted Successfully!');
    }
}
