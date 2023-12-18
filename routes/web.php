<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
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

Route::get('/',function(){
    return view('log-in');
});
    Route::controller(App\Http\Controllers\ProfileController::class)->group(function(){
        // Route::prefix('users')->group(function () {
        Route::get('/dashboard','index')->name('dashboard')->middleware(['auth','verified']);
        Route::get('/user-list','list') ->name('user-list')->middleware(['auth','verified']);
        Route::get('/user-add',  'registeruser') ->name('user-add')->middleware(['auth','verified']);
        Route::post('/user-add',  'storeuser') ->name('user-add')->middleware(['auth','verified']);
        Route::get('/user-edit/{id}','edituser')->middleware(['auth','verified']);
        Route::post('/user-edit/{id}','updateuser')->middleware(['auth','verified']);
        Route::get('/project',  'project')->name('project')->middleware(['auth','verified']);
        Route::get('/profile','profile')->name('user.profile')->middleware(['auth','verified']);
        Route::get('/employee','employee')->name('employee')->middleware(['auth','verified']);
        
        
 Route::get('logout',  'logout') ->name('logout')->middleware(['auth','verified']);
 Route::get('/delete/{id}',  'destroy')->name('delete')->middleware(['auth','verified']);
   
});
    

Route::get('/desk',[TaskController::class,'desk'])->name('desk')->middleware(['auth','verified']);
Route::Post('/desk',[TaskController::class,'deskstore'])->name('create.project')->middleware(['auth','verified']);

Route::get('/task/create',[TaskController::class,'createtask'])->name('create.task')->middleware(['auth','verified']);
Route::post('/task/creates',[TaskController::class,'taskstore'])->name('store')->middleware(['auth','verified']);

Route::middleware(['auth'])->group(function () {

    // Other routes...
    Route::get('/edit/profile',[ProfileController::class,'editprofile'])->name('edit.profile');
    Route::post('/edit/profile',[ProfileController::class,'update'])->name('update.profile');

    // Route::get('/user/profile-information', [ProfileController::class, 'update'])
    //     ->name('user-profile-information.update');
});

require __DIR__.'/auth.php';
