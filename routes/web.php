<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function(){
    return '<h1>Available Jobs</h1>';
})->name('jobs');

Route::match(['get', 'post'],'/submit', function(){
    return 'submitted';
});

Route::get('/test', function(){
    $url = route('jobs');
    return "<a href='$url'>Click Here</a>";
});

Route::get('/api/users', function(){
    return [
        'name'=>'John Doe',
        'email'=>'john@doe.com',
    ];
});
