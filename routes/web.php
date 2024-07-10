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
use \App\Http\Controllers\ListItemController;
use \App\Http\Controllers\StudentController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\SslCommerzPaymentController;
use \App\Http\Controllers\ReportController;
use Illuminate\Http\Request;
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
Route::get('/student-dashboard', [FrontendControllers::class, 'studentDashBoard'])->name('studentDashboard');
Route::post('/student-pay-now', [FrontendControllers::class, 'studentPayNow'])->name('studentPayNow');
Route::post('/student-new', [FrontendControllers::class, 'studentNew'])->name('studentNew');
Route::post('/student-update', [FrontendControllers::class, 'studentUpdate'])->name('studentUpdate');
Route::post('/student-logout', [FrontendControllers::class, 'studentLogout'])->name('studentLogout');
Route::post('/Contact-submit', [FrontendControllers::class, 'storeContact'])->name('storeContact');
Route::post('/research-form-submit', [FrontendControllers::class, 'researchFrom'])->name('researchFrom');
Route::post('/upload-chunk', [FrontendControllers::class, 'uploadChunk'])->name('upload-chunk');
Route::get('/clear/route', [ConfigController::class, 'clearRoute']);
Route::get('/clear/cache', [ConfigController::class, 'clearCache']);
Route::get('/send-test-email', [ConfigController::class, 'testEmail']);

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-custom', [SslCommerzPaymentController::class, 'indexCustom']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/pay-via-ajax2', [SslCommerzPaymentController::class, 'payViaAjax2']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
//Route::post('/success', [SslCommerzPaymentController::class, 'successData']);
//Route::get('/success', [SslCommerzPaymentController::class, 'successData']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::group(['middleware' => 'auth'],function (){
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('adminDashboard');
    Route::get('/all-course-download-csv/{type}', [AdminDashboardController::class, 'allCourseDownload'])->name('allCourseDownload.csv');

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

//    sidebar route
    Route::get('/side-bar', [SideBarController::class, 'index'])->name('sideBar')->middleware('checkprivilege:SBL');
    Route::get('/side-bar-new/{id}', [SideBarController::class, 'newSideBar'])->name('newSideBar')->middleware('checkprivilege:SBE');
    Route::post('/side-bar-settings', [SideBarController::class, 'storeSideBar'])->name('storeSideBar')->middleware('checkprivilege:SBE');
    Route::post('/program-menu', [SideBarController::class, 'programMenu'])->name('programMenu')->middleware('checkprivilege:SBE');

//    List Item route
    Route::get('/list-item', [ListItemController::class, 'index'])->name('listItem')->middleware('checkprivilege:IL');
    Route::get('/list-item-new/{id}', [ListItemController::class, 'newListItem'])->name('newListItem')->middleware('checkprivilege:IE');
    Route::post('/list-item-settings', [ListItemController::class, 'storeListItem'])->name('storeListItem')->middleware('checkprivilege:IE');

//    page route
    Route::get('/pages-all', [PagesController::class, 'index'])->name('allPages')->middleware('checkprivilege:PL');
    Route::get('/page-details/{id}', [PagesController::class, 'detailsPage'])->name('detailsPage')->middleware('checkprivilege:PE');
    Route::delete('/page-delete/{id}', [PagesController::class, 'destroy'])->name('deletePage')->middleware('checkprivilege:PD');
    Route::post('/page-settings', [PagesController::class, 'storePagesSetting'])->name('pageSettings')->middleware('checkprivilege:PE');
    Route::post('/page-menu', [PagesController::class, 'getMenu'])->name('pageMenu')->middleware('checkprivilege:PE');

//    create form wizard
    Route::get('/form-create', [FormController::class, 'createForm'])->name('createForm')->middleware('checkprivilege:FE');
    Route::get('/form-list', [FormController::class, 'formList'])->name('formList')->middleware('checkprivilege:FL');
    Route::get('/form-details/{id}', [FormController::class, 'detailsForm'])->name('detailsForm')->middleware('checkprivilege:FE');
    Route::delete('/form-delete/{id}', [FormController::class, 'deleteForm'])->name('deleteForm')->middleware('checkprivilege:FD');
    Route::get('/form-details-json/{id}', [FormController::class, 'detailsFormJson'])->name('detailsFormJson')->middleware('checkprivilege:FE');
    Route::get('/form-edit/{id}', [FormController::class, 'editForm'])->name('editForm')->middleware('checkprivilege:FE');
    Route::post('/form-add', [FormController::class, 'addForm'])->name('addForm')->middleware('checkprivilege:FE');

//    menu page route
    Route::get('/menu-all', [MenuController::class, 'index'])->name('allMenu')->middleware('checkprivilege:ML');
    Route::get('/menu-create/{id}/{parentId}', [MenuController::class, 'newMenu'])->name('newMenu')->middleware('checkprivilege:ME');
    Route::delete('/menu-delete/{id}', [MenuController::class, 'destroy'])->name('deleteMenu')->middleware('checkprivilege:MD');
    Route::get('/menu-details/{parentId}', [MenuController::class, 'detailsMenu'])->name('detailsMenu')->middleware('checkprivilege:ML');
    Route::post('/menu-update', [MenuController::class, 'storeMenu'])->name('updateMenu')->middleware('checkprivilege:ME');

//    library page route
    Route::get('/library-page', [LibraryPagesController::class, 'index'])->name('libraryPage');
    Route::get('/library-new-menu/{id}', [LibraryPagesController::class, 'newLibraryMenu'])->name('newLibraryMenu');
    Route::post('/library-settings-page', [LibraryPagesController::class, 'storeLibrarySetting'])->name('librarySettingPage');

//    master page route
    Route::get('/masters-page', [MastersPageController::class, 'index'])->name('mastersPage')->middleware('checkprivilege:MPL');
    Route::post('/masters-page', [MastersPageController::class, 'storeSetting'])->name('masterPage')->middleware('checkprivilege:MPE');
    Route::get('/masters-new-program', [MastersPageController::class, 'addMastersProgram'])->name('newMastersProgram')->middleware('checkprivilege:MPE');
    Route::get('/masters-new-form', [MastersPageController::class, 'addMastersForm'])->name('newMastersForm')->middleware('checkprivilege:MPE');
    Route::post('/masters-add-program', [MastersPageController::class, 'storeMastersProgram'])->name('addMastersProgram')->middleware('checkprivilege:MPE');
    Route::get('/masters-edit-program/{id}', [MastersPageController::class, 'editMastersProgram'])->name('editMastersProgram')->middleware('checkprivilege:MPE');
    Route::post('/masters-update-program', [MastersPageController::class, 'updateMastersProgram'])->name('updateMastersProgram')->middleware('checkprivilege:MPE');
//    course page route
    Route::get('/courses-page', [CoursePageController::class, 'index'])->name('coursesPage')->middleware('checkprivilege:CL');
    Route::post('/course-page', [CoursePageController::class, 'storeSetting'])->name('coursePage')->middleware('checkprivilege:CE');
    Route::get('/course-new-program', [CoursePageController::class, 'addCoursesProgram'])->name('newCoursesProgram')->middleware('checkprivilege:CE');
    Route::post('/course-add-program', [CoursePageController::class, 'storeCoursesProgram'])->name('addCoursesProgram')->middleware('checkprivilege:CE');
    Route::get('/course-edit-program/{id}', [CoursePageController::class, 'editCoursesProgram'])->name('editCoursesProgram')->middleware('checkprivilege:CE');
    Route::post('/course-update-program', [CoursePageController::class, 'updateCoursesProgram'])->name('updateCoursesProgram')->middleware('checkprivilege:CE');
//    Event page route
    Route::get('/events-page', [EventPageController::class, 'index'])->name('eventsPage')->middleware('checkprivilege:EL');
    Route::post('/event-page', [EventPageController::class, 'storeSetting'])->name('eventPage')->middleware('checkprivilege:EE');
    Route::get('/event-new-program', [EventPageController::class, 'addEventsProgram'])->name('newEventsProgram')->middleware('checkprivilege:EE');
    Route::post('/event-add-program', [EventPageController::class, 'storeEventsProgram'])->name('addEventsProgram')->middleware('checkprivilege:EE');
    Route::get('/event-edit-program/{id}', [EventPageController::class, 'editEventsProgram'])->name('editEventsProgram')->middleware('checkprivilege:EE');
    Route::post('/event-update-program', [EventPageController::class, 'updateEventsProgram'])->name('updateEventsProgram')->middleware('checkprivilege:EE');
//    Student List page route
    Route::get('/student-list', [StudentController::class, 'index'])->name('studentList')->middleware('checkprivilege:SL');
    Route::get('/student-new-add/{id}', [StudentController::class, 'newStudent'])->name('addStudent')->middleware('checkprivilege:SE');
    Route::post('/student-info', [StudentController::class, 'studentNew'])->name('storeStudent')->middleware('checkprivilege:SE');
    Route::post('/student-password-change', [StudentController::class, 'changeStudentPassword'])->name('changePasswordStudent')->middleware('checkprivilege:SE');
    Route::delete('/student-delete/{id}', [StudentController::class, 'destroy'])->name('deleteStudent')->middleware('checkprivilege:SD');

//    File List page route
    Route::get('/upload-file-list', [CoursePageController::class, 'downloadFileList'])->name('fileList')->middleware('checkprivilege:UP');
    Route::get('/upload-new-file/{id}', [CoursePageController::class, 'editFileList'])->name('addFile')->middleware('checkprivilege:UP');
    Route::post('/upload-file-info', [CoursePageController::class, 'fileCreate'])->name('storeFile')->middleware('checkprivilege:UP');
    Route::delete('/upload-file-delete/{id}', [CoursePageController::class, 'destroyDownloadFile'])->name('deleteFile')->middleware('checkprivilege:UP');


//    System User List page route
    Route::get('/user-list', [UserController::class, 'index'])->name('userList')->middleware('checkprivilege:UL');
    Route::get('/user-new-add/{id}', [UserController::class, 'newUser'])->name('addUser')->middleware('checkprivilege:UE');
    Route::post('/user-info', [UserController::class, 'userCreat'])->name('storeUser')->middleware('checkprivilege:UE');
    Route::post('/user-password-change', [UserController::class, 'changeUserPassword'])->name('changePasswordUser')->middleware('checkprivilege:UE');
    Route::delete('/user-delete/{id}', [UserController::class, 'destroy'])->name('deleteUser')->middleware('checkprivilege:UD');

//    Report route
    Route::get('/report-research-application', [ReportController::class, 'researchData'])->name('researchList')->middleware('checkprivilege:RA');
    Route::get('/report-research-details/{id}', [ReportController::class, 'researchDetails'])->name('researchDetails')->middleware('checkprivilege:RA');
    Route::get('/download-pdf/{filePath}', [ReportController::class, 'downloadPDF'])->name('downloadFile')->middleware('checkprivilege:RA');
    Route::get('/download-csv/{id}', [ReportController::class, 'downloadCSV'])->name('downloadCSV')->middleware('checkprivilege:RA');
    Route::get('/report-audit-log', [ReportController::class, 'getLogData'])->name('getAuditLogData')->middleware('checkprivilege:RA');
    Route::get('/report-payment-log', [ReportController::class, 'getPaymentDetails'])->name('getPaymentDetails')->middleware('checkprivilege:RA');
});

