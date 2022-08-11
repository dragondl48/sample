<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ShowData;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('hieu', [FirstController::class, 'index']);

Route::prefix('categories')->group(function(){
    Route::get('/',[FirstController::class,'aaa'])->name('categories.list');

    Route::get('edit/{id}',[FirstController::class,'getCategory'])->name('categories.edit');

    Route::post('edit/{id}',[FirstController::class,'updateCategory']);

    Route::get('/add',[FirstController::class,'addCategory'])->name('categories.add');

    Route::post('/add',[FirstController::class,'handleAddCategory']);

    Route::post('/delete/{id}',[FirstController::class,'deleteCategory'])->name('categories.delete');
});

Route::get('/test', [TestController::class, 'test']);
Route::get('/teacher',[ShowData::class,'show']);
Route::get('edit-student/{id}', [ShowData::class, 'update']);
Route::post('update-student/{id}',[ShowData::class],'handleUpdate');