<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    //
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contacts');
});

Route::get('/profile', [ProfileController::class, 'create'])->name('profile.create');
Route::get('/recherche', [ProfileController::class, 'recherche'])->name('recherche.create');
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
Route::post('/profile2', [ProfileController::class, 'store2'])->name('profile.store2');
Route::get('/artisan/{cmd}', function ($cmd) {
    // return $password = Hash::make('password');

    // if($cmd=="h"){

    //     return \Artisan::call("migrate:rollback  --path=database/migrations/2022_06_11_150945_create_nounous_table.php", [
    //         '--force' => true
    //     ]);

    // }

    // elseif($cmd=="h1"){

    //     return \Artisan::call("migrate:rollback  --path=database/migrations/2022_06_11_150808_create_clients_table.php");
    // }
    return \Artisan::call($cmd);
    // bcrypt('password');
});

