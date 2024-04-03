<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Admin\AdminController;


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

// Route::get('/', function () {
//     return view("web.index");
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
     // ----- Services ------  \\
Route::controller(AdminController::class)->middleware('AuthAdmin')->prefix('lmex')->group(function(){
    Route::get('admin','index')->name('Services');
    Route::get('Services/add','add')->name('Services.add');
    Route::post('Services/show','show')->name('Services.show');
    Route::post('Services/edit/{id}','edit')->name('Services.edit');
    Route::post('Services/update/{id}','update')->name('Services.update');
    Route::post('Services/delete/{id}','delete')->name('Services.delete');

    Route::get('logout','logout')->name('logout');
  });

    // --------------- LMEX WEBSITE ----------------  \\
  Route::controller(WebController::class)->prefix('lmex')->group(function(){
    Route::get("/","index")->name("webs.index");
    Route::get("about","about")->name("webs.about");
    Route::get("services","service")->name("webs.services");
    Route::get("contact","contact")->name("webs.contact");
  });
