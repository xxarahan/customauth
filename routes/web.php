<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;
use App\Http\Controllers\UploadManager;
use App\Http\Controllers\ForgetPasswordManager;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/login', [Authmanager::class, 'login'])->name('login');
Route::post('/login', [Authmanager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Authmanager::class, 'registration'])->name('registration');
Route::post('/registration', [Authmanager::class, 'registrationPost'])->name('registration.post');
Route::get('/logout',[Authmanager::class, 'logout'])->name('logout');
Route::get('/profile', function(){
    
    return "Profil sayfasindasiniz...";    
});
Route::get("/upload", [UploadManager::class, "upload"])->name("upload");
Route::post("/upload", [UploadManager::class, "uploadPost"])->name("upload.post");
Route::get("/forget-password", [ForgetPasswordManager::class, "forgetPassword"])->name("forget.password");
Route::post("/forget-password", [ForgetPasswordManager::class, "forgetPasswordPost"])->name("forget.password.post");
Route::get("/reset-password{token}", [ForgetPasswordManager::class, "resetPassword"])->name("reset.password");
Route::post("/reset-password", [ForgetPasswordManaager::class, "resetPassword"])->name("reset.password.post");