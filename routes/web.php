<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Session;


Route::middleware([SetLocale::class])->group(function () {

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/project/view/{slug}', [ProjectController::class, 'view'])->name('project.view');
    Route::get('/blogs/index', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');

    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('/projects', function () {
        return view('projects');
    })->name('projects');

    Route::get('/team', function () {
        return view('team');
    })->name('team');

});

// Route::get('/protofolio', function () {
//     return view('protofolio');
// });




Route::post('/message', [MessageController::class,'store'])->name('message.store');

Route::get('language/{locale}', function ($locale) {
    $availableLocales = ['en', 'ar'];
    if (in_array($locale, $availableLocales)) {
        Session::put('locale', $locale);
        Session::put('dir', $locale === 'ar' ? 'rtl' : 'ltr');
        App::setLocale($locale);

    }


    return Redirect::back();
})->name('language.switch');
