<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/sara', function () {
    return view('test');
});

Route::get('/', [Frontpages::class, 'home'])->name('home');
Route::get('about', [Frontpages::class, 'about'])->name('about');
Route::get('shop', [Frontpages::class, 'shop'])->name('shop');
Route::get('blog', [Frontpages::class, 'blog'])->name('blog');







// Route::get('/test', function () {
//     return 'Route is working';
// });
// Route::fallback(function () {
//     return response()->json([
//         'message' => 'Route not found',
//         'routes' => Route::getRoutes()->getRoutes(),
//     ], 404);
// });