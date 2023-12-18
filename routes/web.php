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
    return view('user-account-setting');
});
/*->middleware(['auth', 'verified'])*/

// Route::prefix('user')->group(function(){
    Route::controller(App\Http\Controllers\ProfileController::class)->group(function(){
        Route::get('/dashboard','index')->name('dashboard')->middleware(['auth','verified']);
        Route::get('/user-list','list') ->name('user-list');
        Route::get('/user-add',  'registeruser') ->name('user-add');
        Route::post('/user-add',  'storeuser') ->name('user-add');
        Route::get('/user-edit/{id}','edituser');
        Route::post('/user-edit/{id}','updateuser');
        Route::get('/project',  'project')->name('project');
        Route::get('/profile','profile')->name('user.profile');
        
        
 Route::get('logout',  'logout') ->name('logout');
 Route::get('/delete/{id}',  'destroy')->name('delete');
});
    

Route::get('/desk',[TaskController::class,'desk'])->name('desk');
Route::Post('/desk',[TaskController::class,'deskstore'])->name('create.project');

Route::get('/task/create',[TaskController::class,'createtask'])->name('create.task');
Route::post('/task/creates',[TaskController::class,'taskstore'])->name('store');



// });


// Route::middleware('auth')->group(function () {
//     Route::get('/profile',  'edit'])->name('profile.edit');
//  Route::patch('/profile',[Profilecontroller::class, 'update'])->name('profile.update');
 
//     Route::delete('/profile',  'destroy'])->name('profile.destroy');
// });


Route::middleware(['auth'])->group(function () {

    // Other routes...
    Route::get('/edit/profile',[ProfileController::class,'editprofile'])->name('edit.profile');
    Route::post('/edit/profile',[ProfileController::class,'update'])->name('update.profile');

    // Route::get('/user/profile-information', [ProfileController::class, 'update'])
    //     ->name('user-profile-information.update');
});

require __DIR__.'/auth.php';
