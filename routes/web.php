<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminDashboardController;
use \App\Http\Controllers\FrontendController;
use \App\Http\Controllers\ConfigController;
use \App\Http\Controllers\MastersPageController;
use \App\Http\Controllers\CoursePageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/home', [FrontendController::class, 'index']);
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/masters-program', [FrontendController::class, 'mastersProgram'])->name('mastersProgram');
Route::get('/certification-training', [FrontendController::class, 'certificationTraining'])->name('certificationTraining');
Route::get('/technology', [FrontendController::class, 'technology'])->name('technology');
Route::get('/approch', [FrontendController::class, 'approch'])->name('approch');
Route::get('/diploma', [FrontendController::class, 'diploma'])->name('diploma');
Route::get('/clear/route', [ConfigController::class, 'clearRoute']);
Route::get('/clear/cache', [ConfigController::class, 'clearCache']);

Route::group(['middleware' => 'auth'],function (){
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('adminDashboard');
//    master page route
    Route::get('/masters-page', [MastersPageController::class, 'index'])->name('mastersPage');
    Route::post('/masters-page', [MastersPageController::class, 'storeSetting'])->name('masterPage');
    Route::get('/masters-new-program', [MastersPageController::class, 'addMastersProgram'])->name('newMastersProgram');
    Route::post('/masters-add-program', [MastersPageController::class, 'storeMastersProgram'])->name('addMastersProgram');
    Route::get('/masters-edit-program/{id}', [MastersPageController::class, 'editMastersProgram'])->name('editMastersProgram');
    Route::post('/masters-update-program', [MastersPageController::class, 'updateMastersProgram'])->name('updateMastersProgram');
//    course page route
    Route::get('/course-page', [CoursePageController::class, 'index'])->name('coursesPage');
    Route::post('/course-page', [CoursePageController::class, 'storeSetting'])->name('coursePage');
    Route::get('/course-new-program', [CoursePageController::class, 'addCoursesProgram'])->name('coursesProgram');
    Route::post('/course-add-program', [CoursePageController::class, 'storeCoursesProgram'])->name('addCoursesProgram');
    Route::get('/course-edit-program/{id}', [CoursePageController::class, 'editCoursesProgram'])->name('editCoursesProgram');
    Route::post('/course-update-program', [CoursePageController::class, 'updateCoursesProgram'])->name('updateCoursesProgram');
//    Event page route
    Route::get('/events-page', [CoursePageController::class, 'index'])->name('eventsPage');
    Route::post('/event-page', [CoursePageController::class, 'storeSetting'])->name('eventPage');
    Route::get('/new-events', [CoursePageController::class, 'addEvent'])->name('newEvent');
    Route::post('/add-events', [CoursePageController::class, 'storeEvent'])->name('addEvent');
});

