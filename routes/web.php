<?php

/**
 * Application routes.
 */

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Themosis\Support\Facades\PostType;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::any('page', function ($post, $query) {
    $template = get_field('template', $post->ID);
    $data['post'] = $post;
    $data['template'] = json_decode(json_encode($template), FALSE);

    return view('pages.default', $data);
});
