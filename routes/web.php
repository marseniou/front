<?php

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Concert;
use App\Models\Musician;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $musicians = Musician::active()->get();
    return view('welcome', compact('musicians'));
});
Route::get('/blog', function(){
    $posts = Post::publishedAt()->active()->limit(3)->get();
    return view('blog', compact('posts'));
});
Route::get('/concerts', function(){
    $concerts = Concert::fromNowOn()->get();
    //dd($concerts);
    return view('concerts', compact('concerts'));
});
