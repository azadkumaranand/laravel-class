<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    // $arr = ['azad', 'suman', 'Dev', 'Arvind', 'Abhijeet'];
    return view('index');
});


Route::get('/contact', function(){
    return view('contact');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/client', function(){
    return view('client');
});
Route::get('/faq', function(){
    return view('faq');
});
Route::get('/service', function(){
    return view('service');
});
Route::get('/portfolio', function(){
    return view('portfolio');
});
Route::get('/team', function(){
    return view('team');
});

Route::post('/contact-form-submit', function(Request $request){
    $request->validate([
        'name'=>'required|string|min:3|max:255',
        'email'=>'required|string|max:255',
        'subject'=>'required|string|min:5|max:255',
        'message'=>'required|string|min:5',
    ]);

    DB::table('contacts')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
    ]);

    return redirect()->back()->with('success', 'Form Submitted Successfully!');

})->name('contact.form.submit');

// Route::get('about/{id}', function($id){
//     $arr = ['azad', 'suman', 'Dev', 'Arvind', 'Abhijeet'];
//     return view('about', ['id'=>$id, 'names'=>$arr]);
// });

// Route::get('/test/{id?}', function(?int $id=10){
//     return 'hello guys this is the about page!'.$id;
// });

// function azad($a, $b){
//     return $a+$b;
// }
// Route::get('/add/{a}/{b?}', function($a, $b=10){
//     return azad($a, $b);
// });
