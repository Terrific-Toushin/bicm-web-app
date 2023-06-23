<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminDashboardController;
use \App\Http\Controllers\FrontendController;
use \App\Http\Controllers\ConfigController;
use \App\Http\Controllers\MastersPageController;
use \App\Http\Controllers\CoursePageController;
use \App\Http\Controllers\EventPageController;
use \App\Http\Controllers\HomePageController;
use \App\Http\Controllers\AboutPagesController;
use \App\Http\Controllers\LibraryPagesController;
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
//    home page route
    Route::get('/home-page', [HomePageController::class, 'index'])->name('homePage');
    Route::get('/home-new-section/{id}', [HomePageController::class, 'newSection'])->name('newSection');
    Route::get('/home-new-service/{id}', [HomePageController::class, 'newService'])->name('newService');
    Route::get('/home-new-Overviews/{id}', [HomePageController::class, 'newOverview'])->name('newOverview');
    Route::get('/home-new-why/{id}', [HomePageController::class, 'newWhy'])->name('newWhy');
    Route::get('/home-new-project/{id}', [HomePageController::class, 'newProject'])->name('newProject');

    Route::post('/home-settings-page', [HomePageController::class, 'storeHomeSetting'])->name('homeSettingPage');
    Route::post('/home-services-page', [HomePageController::class, 'storeHomeService'])->name('homeServicePage');
    Route::post('/home-Overviews-page', [HomePageController::class, 'storeHomeOverview'])->name('homeOverviewPage');
    Route::post('/home-why-page', [HomePageController::class, 'storeHomeWhy'])->name('homeWhyPage');
    Route::post('/home-project-page', [HomePageController::class, 'storeHomeProject'])->name('homeProjectPage');

//    about page route
    Route::get('/about-page', [AboutPagesController::class, 'index'])->name('aboutPage');
    Route::get('/about-new-menu/{id}', [AboutPagesController::class, 'newAboutMenu'])->name('newAboutMenu');
    Route::post('/about-settings-page', [AboutPagesController::class, 'storeAboutSetting'])->name('aboutSettingPage');

//    library page route
    Route::get('/library-page', [LibraryPagesController::class, 'index'])->name('libraryPage');
    Route::get('/library-new-menu/{id}', [LibraryPagesController::class, 'newLibraryMenu'])->name('newLibraryMenu');
    Route::post('/library-settings-page', [LibraryPagesController::class, 'storeLibrarySetting'])->name('librarySettingPage');

//    master page route
    Route::get('/masters-page', [MastersPageController::class, 'index'])->name('mastersPage');
    Route::post('/masters-page', [MastersPageController::class, 'storeSetting'])->name('masterPage');
    Route::get('/masters-new-program', [MastersPageController::class, 'addMastersProgram'])->name('newMastersProgram');
    Route::post('/masters-add-program', [MastersPageController::class, 'storeMastersProgram'])->name('addMastersProgram');
    Route::get('/masters-edit-program/{id}', [MastersPageController::class, 'editMastersProgram'])->name('editMastersProgram');
    Route::post('/masters-update-program', [MastersPageController::class, 'updateMastersProgram'])->name('updateMastersProgram');
//    course page route
    Route::get('/courses-page', [CoursePageController::class, 'index'])->name('coursesPage');
    Route::post('/course-page', [CoursePageController::class, 'storeSetting'])->name('coursePage');
    Route::get('/course-new-program', [CoursePageController::class, 'addCoursesProgram'])->name('newCoursesProgram');
    Route::post('/course-add-program', [CoursePageController::class, 'storeCoursesProgram'])->name('addCoursesProgram');
    Route::get('/course-edit-program/{id}', [CoursePageController::class, 'editCoursesProgram'])->name('editCoursesProgram');
    Route::post('/course-update-program', [CoursePageController::class, 'updateCoursesProgram'])->name('updateCoursesProgram');
//    Event page route
    Route::get('/events-page', [EventPageController::class, 'index'])->name('eventsPage');
    Route::post('/event-page', [EventPageController::class, 'storeSetting'])->name('eventPage');
    Route::get('/event-new-program', [EventPageController::class, 'addEventsProgram'])->name('newEventsProgram');
    Route::post('/event-add-program', [EventPageController::class, 'storeEventsProgram'])->name('addEventsProgram');
    Route::get('/event-edit-program/{id}', [EventPageController::class, 'editEventsProgram'])->name('editEventsProgram');
    Route::post('/event-update-program', [EventPageController::class, 'updateEventsProgram'])->name('updateEventsProgram');
});

