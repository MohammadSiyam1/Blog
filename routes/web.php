<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendViewController;
use App\Http\Controllers\OthersController;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes
Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::controller(FrontendViewController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('blogs','showblog')->name('frontend.blogs');
    Route::get('blog/view-full-blog/{slug}','viewFullBlog')->name('frontend.viewFullBlog');
    Route::get('contact-us','contactUs')->name('frontend.contactUs');
    Route::post('contact-us','storeContactDetails')->name('frontend.storeContactDetails');
});

// Route::get('/dashboard', function () {
//     return view('backend.index');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::view('dashboard','backend.index')->name('dashboard');
    Route::resource('blog',BlogController::class);
    Route::get('about-us',[OthersController::class,'viewAboutUs'])->name('about.view');
    Route::put('about-us/{id}',[OthersController::class,'aboutUs'])->name('aboutUs');
    Route::get('contact-messages',[OthersController::class,'contactMessages'])->name('contactmessages');
    Route::get('contact-messages/{id}',[OthersController::class,'deleteMessages'])->name('deletemessages');
});







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
