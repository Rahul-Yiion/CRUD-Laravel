<?php

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;


// returns the home page with all posts
Route::get('/', [StudentController::class,'index'])->name('student.index');
// returns the form for adding a post
Route::get('/create', [StudentController::class,'create'])->name('student.create');
// adds a post to the database
Route::post('/store', [StudentController::class,'store'])->name('student.store');
// returns a page that shows a full post
Route::get('/show/{id}',[StudentController::class,'show'])->name('student.show');
// returns the form for editing a post
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('student.edit');
// updates a post
Route::get('/update/{students}', [StudentController::class,'update'])->name('student.update');
Route::get('/delete/{students}', [StudentController::class,'destroy'])->name('student.destroy');
// deletes a post
// Route::delete('/students/{student}', StudentController::class .'@destroy')->name('student.destroy');

Route::get('/course', [StudentController::class,'course']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
