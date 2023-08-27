<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminDashboardController;
use \App\Http\Controllers\FrontendControllers;
use \App\Http\Controllers\ConfigController;
use \App\Http\Controllers\MastersPageController;
use \App\Http\Controllers\CoursePageController;
use \App\Http\Controllers\EventPageController;
use \App\Http\Controllers\HomePageController;
use \App\Http\Controllers\AboutPagesController;
use \App\Http\Controllers\LibraryPagesController;
use \App\Http\Controllers\MenuController;
use \App\Http\Controllers\PagesController;
use \App\Http\Controllers\FormController;
use \App\Http\Controllers\SideBarController;
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

Route::get('/', [FrontendControllers::class, 'index'])->name('home');
Route::get('/home', [FrontendControllers::class, 'index']);
Route::get('/pages/{url}', [FrontendControllers::class, 'pageDetails'])->name('pageDetails');
Route::get('/pages/program-details/{page_type}/{page_id}', [FrontendControllers::class, 'programDetails'])->name('programDetails');
Route::get('/pages/course-details/{page_id}', [FrontendControllers::class, 'courseDetails'])->name('courseDetails');
Route::get('/pages/event-details/{page_id}', [FrontendControllers::class, 'eventDetails'])->name('eventsDetails');
Route::get('/pages/program-apply/{page_id}/{program_id}', [FrontendControllers::class, 'programForm'])->name('programForm');
Route::get('/service', [FrontendControllers::class, 'service'])->name('service');
Route::get('/masters-program', [FrontendControllers::class, 'mastersProgram'])->name('mastersProgram');
Route::get('/certification-training', [FrontendControllers::class, 'certificationTraining'])->name('certificationTraining');
Route::get('/technology', [FrontendControllers::class, 'technology'])->name('technology');
Route::get('/approch', [FrontendControllers::class, 'approch'])->name('approch');
Route::get('/diploma', [FrontendControllers::class, 'diploma'])->name('diploma');
Route::post('/store-form-data', [FrontendControllers::class, 'storeFormData'])->name('storeFormData');
Route::post('/store-contact-data', [FrontendControllers::class, 'storeContactData'])->name('storeContactData');
Route::get('/verify/{id}/{hash}', [FrontendControllers::class, 'verify'])->name('verification.verify');
Route::get('/student-login', [FrontendControllers::class, 'studentLogin'])->name('studentLogin');
Route::post('/student-login-check', [FrontendControllers::class, 'checkStudentLogin'])->name('checkStudentLogin');
Route::get('/student-forget-login', [FrontendControllers::class, 'studentForgetLogin'])->name('studentForgetLogin');
Route::post('/student-password-reset', [FrontendControllers::class, 'resetStudentPassword'])->name('resetStudentPassword');
Route::get('/student-signUp', [FrontendControllers::class, 'studentSignUp'])->name('studentSignUp');
Route::get('/student-dashboard', [FrontendControllers::class, 'studentDashboard'])->name('studentDashboard');
Route::post('/student-new', [FrontendControllers::class, 'studentNew'])->name('studentNew');
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

//    side bar route
    Route::get('/side-bar', [SideBarController::class, 'index'])->name('sideBar');
    Route::get('/side-bar-new/{id}', [SideBarController::class, 'newSideBar'])->name('newSideBar');
    Route::post('/side-bar-settings', [SideBarController::class, 'storeSideBar'])->name('storeSideBar');
    Route::post('/program-menu', [SideBarController::class, 'programMenu'])->name('programMenu');

//    page route
    Route::get('/pages-all', [PagesController::class, 'index'])->name('allPages');
    Route::get('/page-details/{id}', [PagesController::class, 'detailsPage'])->name('pageDetails');
    Route::delete('/page-delete/{id}', [PagesController::class, 'destroy'])->name('deletePage');
    Route::post('/page-settings', [PagesController::class, 'storePagesSetting'])->name('pageSettings');
    Route::post('/page-menu', [PagesController::class, 'getMenu'])->name('pageMenu');

//    create form wizard
    Route::get('/form-create', [FormController::class, 'createForm'])->name('createForm');
    Route::get('/form-list', [FormController::class, 'formList'])->name('formList');
    Route::get('/form-details/{id}', [FormController::class, 'detailsForm'])->name('detailsForm');
    Route::get('/form-details-json/{id}', [FormController::class, 'detailsFormJson'])->name('detailsFormJson');
    Route::get('/form-edit/{id}', [FormController::class, 'editForm'])->name('editForm');
    Route::post('/form-add', [FormController::class, 'addForm'])->name('addForm');

//    menu page route
    Route::get('/menu-all', [MenuController::class, 'index'])->name('allMenu');
    Route::get('/menu-create/{id}/{parentId}', [MenuController::class, 'newMenu'])->name('newMenu');
    Route::delete('/menu-delete/{id}', [MenuController::class, 'destroy'])->name('deleteMenu');
    Route::get('/menu-details/{parentId}', [MenuController::class, 'detailsMenu'])->name('detailsMenu');
    Route::post('/menu-update', [MenuController::class, 'storeMenu'])->name('updateMenu');

//    library page route
    Route::get('/library-page', [LibraryPagesController::class, 'index'])->name('libraryPage');
    Route::get('/library-new-menu/{id}', [LibraryPagesController::class, 'newLibraryMenu'])->name('newLibraryMenu');
    Route::post('/library-settings-page', [LibraryPagesController::class, 'storeLibrarySetting'])->name('librarySettingPage');

//    master page route
    Route::get('/masters-page', [MastersPageController::class, 'index'])->name('mastersPage');
    Route::post('/masters-page', [MastersPageController::class, 'storeSetting'])->name('masterPage');
    Route::get('/masters-new-program', [MastersPageController::class, 'addMastersProgram'])->name('newMastersProgram');
    Route::get('/masters-new-form', [MastersPageController::class, 'addMastersForm'])->name('newMastersForm');
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

