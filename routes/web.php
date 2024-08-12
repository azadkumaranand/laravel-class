<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $arr = ['azad', 'suman', 'Dev', 'Arvind', 'Abhijeet'];
    return view('welcome');
});


Route::get('/contact/{id}', function($id){
    return 'hello guys this is the contact page!'.$id;
});

Route::get('about/{id}', function($id){
    $arr = ['azad', 'suman', 'Dev', 'Arvind', 'Abhijeet'];
    return view('about', ['id'=>$id, 'names'=>$arr]);
});

Route::get('/test/{id?}', function(?int $id=10){
    return 'hello guys this is the about page!'.$id;
});

function azad($a, $b){
    return $a+$b;
}
Route::get('/add/{a}/{b?}', function($a, $b=10){
    return azad($a, $b);
});
