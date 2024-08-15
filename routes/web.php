<?php

use Illuminate\Support\Facades\Route;

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
