<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuestionController;
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
    return view('publicSite.index');
});
Route::get('/admin', function () {
    return view('adminSite.index');
});
Route::get('/admin/manageAdmin', function () {
    return view('adminSite.manageAdmins');
})->name('manageAdmin');

// Route::get('/admin/manageCategory', function () {
//     return view('adminSite.manageCategory');
// })->name('manageCategory');

Route::get('/admin/manageUsers', function () {
    return view('adminSite.manageUsers');
})->name('manageUsers');

Route::get('/admin/manageExams', function () {
    return view('adminSite.manageExams');
})->name('manageExams');

Route::get('/admin/manageQues', function () {
    return view('adminSite.manageQues');
})->name('manageQues');

Route::get('/admin/manageAnswers', function () {
    return view('adminSite.manageAnswers');
})->name('manageAnswers');

Route::get('/admin/manageQues', function () {
    return view('adminSite.manageQues');
})->name('manageQues');

Route::get('/admin/manageResult', function () {
    return view('adminSite.manageResult');
})->name('manageResult');

//category route
Route::get("add_category", [CategoryController::class, 'backendcreate']);
Route::post("store_category", [CategoryController::class, 'backendstore'])->name('category.store');
Route::get("category", [CategoryController::class, 'backendindex'])->name('manageCategory');
Route::get("edit_category/{id}", [CategoryController::class, 'backendedit'])->name('category.edit');
Route::post("update_category/{id}", [CategoryController::class, 'backendupdate'])->name('category.update');
Route::get("delete_category/{id}", [CategoryController::class, 'backenddestroy'])->name('category.delete');

//exam route
Route::get("add_exam", [ExamController::class, 'backendcreate']);
Route::post("store_exam", [ExamController::class, 'backendstore'])->name('exam.store');
Route::get("exam", [ExamController::class, 'backendindex'])->name('manageExams');
Route::get("edit_exam/{id}", [ExamController::class, 'backendedit'])->name('exam.edit');
Route::post("update_exam/{id}", [ExamController::class, 'backendupdate'])->name('exam.update');
Route::get("delete_exam/{id}", [ExamController::class, 'backenddestroy'])->name('exam.delete');

//question route
Route::get('add_question',[QuestionController::class, 'backendcreate']);
Route::post('store_question',[QuestionController::class, 'backendstore'])->name('question.store');
Route::get('question',[QuestionController::class, 'backendindex'])->name('manageQues');
Route::get("edit_question/{id}", [QuestionController::class, 'backendedit'])->name('question.edit');
Route::post("update_question/{id}", [QuestionController::class, 'backendupdate'])->name('question.update');
Route::get("delete_question/{id}", [QuestionController::class, 'backenddestroy'])->name('question.delete');


//option route
Route::get('add_option',[OptionController::class, 'backendcreate']);
Route::post('store_option',[OptionController::class, 'backendstore'])->name('option.store');
Route::get('option',[OptionController::class, 'backendindex'])->name('manageOptions');
Route::get("edit_option/{id}", [OptionController::class, 'backendedit'])->name('option.edit');
Route::post("update_option/{id}", [OptionController::class, 'backendupdate'])->name('option.update');
Route::get("delete_option/{id}", [OptionController::class, 'backenddestroy'])->name('option.delete');