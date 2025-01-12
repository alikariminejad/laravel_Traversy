<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function(){
    return '<h1>Available Jobs</h1>';
})->name('jobs');

// Route::match(['get', 'post'],'/submit', function(){
//     return 'submitted';
// });

// Route::get('/test', function(){
//     $url = route('jobs');
//     return "<a href='$url'>Click Here</a>";
// });

// Route::get('/api/users', function(){
//     return [
//         'name'=>'John Doe',
//         'email'=>'john@doe.com',
//     ];
// });


Route::get('/posts/{id}', function (string $id) {
    return 'Post ' . $id;
})->whereNumber('id');

Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
    return 'Post ' . $id . ' Comment ' . $commentId;
});

Route::get('/test', function (Request $request) {
    return [
        'method' => $request->method(),
        'url' => $request->url(),
        'path' => $request->path(),
        'fullurl' => $request->fullUrl(),
        'ip' => $request->ip(),
        'useragent' => $request->userAgent(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function () {
    return request()->input('name');
});
