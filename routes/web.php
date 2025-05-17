<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\LogRequest;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ApplicantController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
//Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
//Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
//Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

Route::get('/jobs/search', [JobController::class, 'search'])->name('jobs.search');
Route::resource('jobs', JobController::class)->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
Route::resource('jobs', JobController::class)->except(['create', 'edit', 'update', 'destroy']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('bookmarks.index');
    Route::post('/bookmarks/{job}', [BookmarkController::class, 'store'])->name('bookmarks.store');
    Route::delete('/bookmarks/{job}', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');
});

Route::post('/jobs/{job}/', [ApplicantController::class, 'store'])->name('applicant.store')->middleware('auth');
Route::delete('/applicants/{applicant}', [ApplicantController::class, 'destroy'])->name('applicant.destroy')->middleware('auth');




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


