<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE
Route::get('/', function () {
    // Products (DB emulation)
    $comics = config('comics-data');

    return view('home', [
        'comics' => $comics,
    ]);
})->name('home');

// COMIC DETAIL (route with parameter)
Route::get('/comic/{id}', function ($id){
    $comics = config('comics-data');
    dump($comics, $id);

    // Check on id

    if(is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        dump($comic);
    } else {
        abort(404);
    }

    return view('comic-detail', [
        'comic' => $comic,
    ]);
})->name('comic-detail');

// NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');
