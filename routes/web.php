<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('index');


//Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
//Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
//Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
//Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

Route::resource('jobs', JobController::class);









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


//Route::get('/posts/{id}', function (string $id) {
//    return 'Post ' . $id;
//})->whereNumber('id');
//
//Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
//    return 'Post ' . $id . ' Comment ' . $commentId;
//});
//
//Route::get('/test', function (Request $request) {
//    return [
//        'method' => $request->method(),
//        'url' => $request->url(),
//        'path' => $request->path(),
//        'fullurl' => $request->fullUrl(),
//        'ip' => $request->ip(),
//        'useragent' => $request->userAgent(),
//        'header' => $request->header(),
//    ];
//});
//
//Route::get('/users', function () {
//    return request()->input('name');
//});
//
//
//Route::get('/test2', function () {
////    return response('<h2>Hello World</h2>')->header('Content-Type', 'text/html');
//    return response()->json(["name"=>"ali"])->cookie('name', 'ali');
//});
//
//Route::get('/download', function(){
//    return response()->download(public_path('favicon.ico'));
//});

//Route::get('/', function(Request $request){
//    $cookie = $request->cookie('name');
//    return response()->json(['cookie' => $cookie]);
//});


