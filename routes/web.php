<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Concert;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog', function(){
    $posts = Post::publishedAt()->active()->get();
    return view('blog', compact('posts'));
});
Route::get('/concerts', function(){
    $concerts = Concert::fromNowOn()->get();
    //dd($concerts);
    return view('concerts', compact('concerts'));
});
