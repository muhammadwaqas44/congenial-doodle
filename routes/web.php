<?php

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
    return redirect()->route('client-view');
});



//Route::get('/login', 'Front\LoginController@loginView')->name('login-view');
Route::get('/admin-login', 'Front\LoginController@loginAdmin')->name('admin-view');
Route::get('/consultant-login', 'Front\LoginController@loginConsultant')->name('consultant-view');
Route::get('/editor-login', 'Front\LoginController@loginEditor')->name('editor-view');
Route::get('/client-login', 'Front\LoginController@loginClient')->name('client-view');


Route::post('/login-admin-post', 'Front\LoginController@loginAdminPost')->name('login-admin-post');
Route::post('/login-consultant-post', 'Front\LoginController@loginConsultantPost')->name('login-consultant-post');
Route::post('/login-editor-post', 'Front\LoginController@loginEditorPost')->name('login-editor-post');
Route::post('/login-client-post', 'Front\LoginController@loginClientPost')->name('login-client-post');


Route::get('/logout', 'Front\LoginController@logout')->name('logout');
Route::get('/forget-password', 'Front\LoginController@forgetPassword')->name('forget-password');
Route::post('/forget-password', 'Front\LoginController@forgetPasswordPost')->name('forget-password');
Route::get('/reset-password/{forgettoken}', 'Front\LoginController@resetPassword')->name('reset-password');
Route::post('/reset-password/{userId}', 'Front\LoginController@resetPasswordPost')->name('reset-password-post');
//Route::post('/login-post', 'Front\LoginController@loginPost')->name('login-post');
//Route::post('/login-post-client', 'Front\LoginController@loginPostClient')->name('login-post-client');




Route::get('/outlet-print/{scheduleID}', 'ReportPrintController@outletPrint')->name('outlet-print');
Route::get('/lodging-print/{scheduleID}', 'ReportPrintController@lodgingPrint')->name('lodging-print');
Route::get('/notifications-client', 'NotificationController@notificationsClient')->name('notifications-client');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/notifications', 'NotificationController@notifications')->name('notifications');
    Route::get('/notifications-client', 'NotificationController@notificationsClient')->name('notifications-client');
    Route::get('/single-notifications/{id}', 'NotificationController@SingleNotifications')->name('single-notifications');
    Route::get('/admin-notifications', 'Admin\DashBoardController@readAllNotifications')->name('read-all-admin-notifications');



    Route::get('/dashboard', 'Admin\DashBoardController@index')->name('admin-dashboard')->middleware('can:viewAny,App\User');
    Route::get('/admin-listing', 'Admin\UserController@allAdmins')->name('admin-listing')->middleware('can:viewAny,App\User');
    Route::get('/consultant-listing', 'Admin\UserController@allConsultants')->name('consultant-listing')->middleware('can:viewAny,App\User');
    Route::get('/editor-listing', 'Admin\UserController@allEditors')->name('editor-listing')->middleware('can:viewAny,App\User');
    Route::get('/clients-listing', 'Admin\UserController@allClient')->name('clients-listing')->middleware('can:viewAny,App\User');
    Route::get('/add-user', 'Admin\UserController@addNewUser')->name('add-user')->middleware('can:viewAny,App\User');
    Route::post('/add-user-post', 'Admin\UserController@addNewUserPost')->name('add-user-post')->middleware('can:viewAny,App\User');
    Route::get('/edit-user/{userId}', 'Admin\UserController@editUser')->name('edit-user')->middleware('can:viewAny,App\User');
    Route::post('/edit-user-post/{userId}', 'Admin\UserController@editUserPost')->name('edit-user-post')->middleware('can:viewAny,App\User');

    Route::get('/edit-profile-admin/', 'Admin\UserController@editProfile')->name('edit-profile-admin')->middleware('can:viewAny,App\User');
    Route::post('/edit-profile-post/{userId}', 'Admin\UserController@editProfilePost')->name('edit-profile-post');

    Route::get('/soft-delete-user/{userId}', 'Admin\UserController@softDeleteUser')->name('soft-delete-user');





////// Companies
    Route::get('/companies', 'Admin\CompanyController@companies')->name('company-listing')->middleware('can:viewAny,App\User');
    Route::get('/add-company', 'Admin\CompanyController@addCompany')->name('add-company')->middleware('can:viewAny,App\User');
    Route::get('/edit-company/{companyId}', 'Admin\CompanyController@editCompany')->name('edit-company')->middleware('can:viewAny,App\User');
    Route::post('/add-company-post', 'Admin\CompanyController@addCompanyPost')->name('add-company-post')->middleware('can:viewAny,App\User');
    Route::post('/edit-company-post/{companyId}', 'Admin\CompanyController@editCompanyPost')->name('edit-company-post')->middleware('can:viewAny,App\User');


////// Categories
    Route::get('/lodging-listing', 'Admin\CategoryController@lodgingList')->name('lodging-listing')->middleware('can:viewAny,App\User');
    Route::get('/outlets-listing', 'Admin\CategoryController@outletsList')->name('outlets-listing')->middleware('can:viewAny,App\User');
    Route::get('/sub-outlets-listing/{parentId}', 'Admin\CategoryController@categorySubList')->name('sub-outlets-listing')->middleware('can:viewAny,App\User');
    Route::get('/add-category', 'Admin\CategoryController@addCategory')->name('add-category')->middleware('can:viewAny,App\User');
    Route::post('/add-category-post', 'Admin\CategoryController@addCategory_post')->name('add-category-post')->middleware('can:viewAny,App\User');
    Route::get('/edit-category/{id}', 'Admin\CategoryController@editCategory')->name('edit-category')->middleware('can:viewAny,App\User');
    Route::post('/edit-category-post', 'Admin\CategoryController@edidCategory_post')->name('edit-category-post')->middleware('can:viewAny,App\User');
    Route::get('/question-category/{id}', 'Admin\CategoryController@categoryQuestion')->name('question-category')->middleware('can:viewAny,App\User');
    Route::post('/add-question-post', 'Admin\CategoryController@categoryQuestionPostAdd')->name('add-question-post')->middleware('can:viewAny,App\User');
    Route::post('/edit-question-post', 'Admin\CategoryController@categoryQuestionPostEdit')->name('edit-question-post')->middleware('can:viewAny,App\User');

    Route::get('/packages', 'Admin\PackageController@packages')->name('package-listing')->middleware('can:viewAny,App\User');
    Route::get('/add-package', 'Admin\PackageController@addPackage')->name('add-package')->middleware('can:viewAny,App\User');
    Route::get('/edit-package/{id}', 'Admin\PackageController@editPackage')->name('edit-package')->middleware('can:viewAny,App\User');
    Route::post('/edit-package-post', 'Admin\PackageController@editPackage_Post')->name('edit-package-post')->middleware('can:viewAny,App\User');
    Route::post('/add-package-post', 'Admin\PackageController@addPackage_Post')->name('add-package-post')->middleware('can:viewAny,App\User');
    Route::get('/delete-package/{id}', 'Admin\PackageController@packageDelete')->name('delete-package')->middleware('can:viewAny,App\User');


    Route::get('/schedule-listing', 'Admin\ScheduleController@scheduleListing')->name('scheduleListing')->middleware('can:viewAny,App\User');
    Route::get('/schedule-complete-listing', 'Admin\ScheduleController@scheduleCompleteListing')->name('scheduleCompleteListing')->middleware('can:viewAny,App\User');
    Route::get('/addVisitSchedule', 'Admin\ScheduleController@addVisitSchedule')->name('addVisitSchedule')->middleware('can:viewAny,App\User');
    Route::get('/editVisitSchedule/{id}', 'Admin\ScheduleController@editVisitSchedule')->name('editVisitSchedule')->middleware('can:viewAny,App\User');
    Route::post('/updateVisitSchedule_post', 'Admin\ScheduleController@updateVisitSchedule_post')->name('updateVisitSchedule_post')->middleware('can:viewAny,App\User');
    Route::post('/addVisitSchedule-post', 'Admin\ScheduleController@addVisitSchedule_post')->name('addVisitSchedule_post')->middleware('can:viewAny,App\User');

    Route::get('/visitsSchedule', 'Admin\CompanyController@visitsSchedule')->name('visitsSchedule')->middleware('can:viewAny,App\User');




/////////Hotel Brands
    Route::get('/hotels', 'Admin\HotelController@allHotelBrands')->name('hotels-listing')->middleware('can:viewAny,App\User');
    Route::get('/add-hotel-brand', 'Admin\HotelController@addHotelBrand')->name('add-hotel-brand')->middleware('can:viewAny,App\User');
    Route::get('/edit-hotel-brand/{id}', 'Admin\HotelController@editHotelBrand')->name('edit-hotel-brand')->middleware('can:viewAny,App\User');
    Route::post('/add-hotel-brand-post', 'Admin\HotelController@addHotelBrandPost')->name('add-hotel-brand-post')->middleware('can:viewAny,App\User');
    Route::post('/edit-hotel-brand-post', 'Admin\HotelController@editHotelBrandPost')->name('edit-hotel-brand-post')->middleware('can:viewAny,App\User');



//////////Hotel SUb Brands
    Route::get('/sub-brand-listing', 'Admin\HotelController@subBrandListing')->name('subBrandListing')->middleware('can:viewAny,App\User');
    Route::get('/sub-brand-add', 'Admin\HotelController@subBrandAdd')->name('subBrandAdd')->middleware('can:viewAny,App\User');
    Route::get('/sub-brand-edit/{id}', 'Admin\HotelController@subBrandEdit')->name('subBrandEdit')->middleware('can:viewAny,App\User');
    Route::post('/add-sub-brand-post', 'Admin\HotelController@subBrandAddPost')->name('add-sub-brand-post')->middleware('can:viewAny,App\User');
    Route::post('/edit-sub-brand-post', 'Admin\HotelController@subBrandEditPost')->name('edit-sub-brand-post')->middleware('can:viewAny,App\User');



////// Hotel Brand Location
    Route::get('/all-hotel-location', 'Admin\HotelController@allHotelLocations')->name('allHotelLocation')->middleware('can:viewAny,App\User');
    Route::get('/add-hotel-location', 'Admin\HotelController@addHotelLocation')->name('addHotelLocation')->middleware('can:viewAny,App\User');
    Route::get('/edit-hotel-location/{id}', 'Admin\HotelController@editHotelLocation')->name('editHotelLocation')->middleware('can:viewAny,App\User');
    Route::post('/add-hotel-location-post', 'Admin\HotelController@addHotelLocationPost')->name('addHotelLocationPost')->middleware('can:viewAny,App\User');
    Route::post('/edit-hotel-location-post', 'Admin\HotelController@editHotelLocationPost')->name('editHotelLocationPost')->middleware('can:viewAny,App\User');


    ///////// Company Schedules And Reports
    Route::get('/schedule-listing-company/{ComId}', 'Admin\PortalController@scheduleListing')->name('scheduleListingCompany')->middleware('can:viewAny,App\User');
    Route::get('/visit-detail-visit/{scheduleId}', 'Admin\PortalController@reviewEvaluation')->name('visit-detail-company')->middleware('can:viewAny,App\User');
    Route::get('/report-detail-visit/{scheduleId}/{catId}', 'Admin\PortalController@questionMarks')->name('report-detail-company')->middleware('can:viewAny,App\User');
    Route::get('/report-detail-outlet-visit/{scheduleId}/{catId}', 'Admin\PortalController@questionOutletMarks')->name('report-detail-outlet-company')->middleware('can:viewAny,App\User');
    Route::get('/summary-score-visit/{scheduleId}', 'Admin\PortalController@summaryReport')->name('summary-score-company')->middleware('can:viewAny,App\User');



    Route::get('/calender', 'Admin\CompanyController@calender')->name('calender')->middleware('can:viewAny,App\User');

    Route::get('/report', 'Admin\ReportController@scheduleListing')->name('report')->middleware('can:viewAny,App\User');
    Route::get('/compare-report-form', 'Admin\ReportController@compareForm')->name('compareForm')->middleware('can:viewAny,App\User');
    Route::get('/get-location-list-one', 'Admin\ReportController@getLocationListOne')->name('get-location-list-one')->middleware('can:viewAny,App\User');
    Route::get('/get-location-list-two', 'Admin\ReportController@getLocationListTwo')->name('get-location-list-two')->middleware('can:viewAny,App\User');

    Route::get('/compare-report-post', 'Admin\ReportController@compareReport')->name('compare-report-post')->middleware('can:viewAny,App\User');


});

Route::group(['prefix' => 'consultant', 'middleware' => ['auth']], function () {

    Route::get('/consultant-notifications', 'Consultant\ConsultantController@readAllNotifications')->name('read-all-consultant-notifications');


    Route::get('/dashboard', 'Consultant\DashBoardController@indexConsultant')->name('consultant-dashboard')->middleware('can:viewConsultant,App\User');

    Route::get('/edit-profile-consultant/', 'Consultant\DashBoardController@editProfile')->name('edit-profile-consultant')->middleware('can:viewConsultant,App\User');
    Route::post('/edit-profile-post/{userId}', 'Admin\UserController@editProfilePost')->name('edit-profile-post');



    Route::get('/pending-visit', 'Consultant\ConsultantController@pendingVisit')->name('pending-visit')->middleware('can:viewConsultant,App\User');
    Route::get('/start-evaluation-consultant/{id}', 'Consultant\ConsultantController@startEvaluation')->name('startEvaluationConsultant')->middleware('can:viewConsultant,App\User');
    Route::get('/active-visit',  'Consultant\ConsultantController@activeVisit')->name('active-visit')->middleware('can:viewConsultant,App\User');


    Route::get('/photo/{id}', 'Consultant\ConsultantController@consultantPhoto')->name('photo')->middleware('can:viewConsultant,App\User');
    Route::post('/add-picture-post',  'Consultant\ConsultantController@addPicture')->name('add-picture-post')->middleware('can:viewConsultant,App\User');


    Route::get('/visit-detail/{scheduleId}', 'Consultant\ConsultantController@reviewEvaluation')->name('visit-detail-consultant')->middleware('can:viewConsultant,App\User');
    Route::get('/delete-visit-detail/{type}/{category}', 'Consultant\ConsultantController@deleteByTypeConsultant')->name('delete-visit-detail')->middleware('can:viewConsultant,App\User');
    Route::get('/lodging-photo-listing/{scheduleId}', 'Consultant\ConsultantController@lodgingPhotoListing')->name('lodging-photo-listing')->middleware('can:viewConsultant,App\User');
    Route::get('/narrative-listing/{scheduleId}', 'Consultant\ConsultantController@narrativeListing')->name('narrative-listing')->middleware('can:viewConsultant,App\User');


    Route::get('/add-narrative/{scheduleId}', 'Consultant\ConsultantController@addNarrative')->name('narrative')->middleware('can:viewConsultant,App\User');
    Route::post('/narrative-post/', 'Consultant\ConsultantController@addNarrativePost')->name('narrative-post')->middleware('can:viewConsultant,App\User');


    Route::get('/add-lodging/{scheduleId}', 'Consultant\ConsultantController@addLodging')->name('lodging')->middleware('can:viewConsultant,App\User');
    Route::post('/add-lodging-post', 'Consultant\ConsultantController@addLodgingPost')->name('lodging-post')->middleware('can:viewConsultant,App\User');


    Route::get('/add-outlet/{scheduleId}', 'Consultant\ConsultantController@addOutlet')->name('outlet')->middleware('can:viewConsultant,App\User');
    Route::post('/add-outlet-post', 'Consultant\ConsultantController@addOutletPost')->name('outlet-post')->middleware('can:viewConsultant,App\User');
    Route::get('/edit-outlet/{oultetId}', 'Consultant\ConsultantController@editOutlet')->name('edit-outlet')->middleware('can:viewConsultant,App\User');
    Route::post('/edit-outlet-post/{oultetId}', 'Consultant\ConsultantController@editOutlet_Post')->name('edit-outlet-post')->middleware('can:viewConsultant,App\User');

    Route::get('/transaction/{scheduleId}', 'Consultant\ConsultantController@transaction')->name('transaction')->middleware('can:viewConsultant,App\User');
    Route::post('/transaction-post/{scheduleId}', 'Consultant\ConsultantController@transaction_post')->name('transaction-post')->middleware('can:viewConsultant,App\User');
    Route::get('/transaction-listing/{scheduleId}', 'Consultant\ConsultantController@transaction_listing')->name('transaction-listing')->middleware('can:viewConsultant,App\User');


    Route::get('/detail-category-marks/{scheduleId}/{catId}',  'Consultant\QuestionController@questionCategory')->name('detail-category-marks')->middleware('can:viewConsultant,App\User');
    Route::get('/edit-detail-category-marks/{scheduleId}/{catId}',  'Consultant\QuestionController@questionEditCategory')->name('edit-detail-category-marks')->middleware('can:viewConsultant,App\User');
    Route::post('/marks-value-post/',  'Consultant\QuestionController@marksValuePost')->name('marks-value-post')->middleware('can:viewConsultant,App\User');
    Route::post('/edit-marks-value-post/',  'Consultant\QuestionController@marksEditValuePost')->name('edit-marks-value-post')->middleware('can:viewConsultant,App\User');

    Route::post('/add-question-schedule-post', 'Consultant\QuestionController@scheduleQuestionPostAdd')->name('add-question-schedule-post')->middleware('can:viewConsultant,App\User');

    Route::get('/submit-visit/{scheduleId}', 'Consultant\ConsultantController@submitVisit')->name('submit-visit')->middleware('can:viewConsultant,App\User');
    Route::get('/submit-visit-editor/{scheduleId}', 'Consultant\ConsultantController@submitVisitEditor')->name('submit-visit-editor')->middleware('can:viewConsultant,App\User');


});


Route::group(['prefix' => 'editor', 'middleware' => ['auth']], function () {
    Route::get('/editor-notifications', 'Editor\DashBoardController@readAllNotifications')->name('read-all-editor-notifications');

    Route::get('/dashboard', 'Editor\DashBoardController@indexEditor')->name('editor-dashboard')->middleware('can:viewEditor,App\User');

    Route::get('/edit-profile-editor/', 'Editor\DashBoardController@editProfile')->name('edit-profile-editor')->middleware('can:viewEditor,App\User');
    Route::post('/edit-profile-post/{userId}', 'Admin\UserController@editProfilePost')->name('edit-profile-post');

    Route::get('/pending-visit-editor', 'Editor\EditorController@pendingVisit')->name('pending-visit-editor')->middleware('can:viewEditor,App\User');
    Route::get('/start-evaluation-editor/{id}', 'Editor\EditorController@startEvaluation')->name('startEvaluationEditor')->middleware('can:viewEditor,App\User');
    Route::get('/active-visit-editor',  'Editor\EditorController@activeVisit')->name('active-visit-editor')->middleware('can:viewEditor,App\User');



    Route::get('/photo-editor/{id}', 'Editor\EditorController@editorPhoto')->name('photo-editor')->middleware('can:viewEditor,App\User');
    Route::post('/add-picture-post-editor',  'Editor\EditorController@addPicture')->name('add-picture-post-editor')->middleware('can:viewEditor,App\User');


    Route::get('/visit-detail-editor/{scheduleId}', 'Editor\EditorController@reviewEvaluation')->name('visit-detail-editor')->middleware('can:viewEditor,App\User');
    Route::get('/return-to-consultant/{scheduleId}', 'Editor\EditorController@returnToConsultant')->name('return-to-consultant')->middleware('can:viewEditor,App\User');
    Route::get('/complete-visit/{scheduleId}', 'Editor\EditorController@completeVisit')->name('return-to-consultant')->middleware('can:viewEditor,App\User');
    Route::get('/lodging-photo-listing-editor/{scheduleId}', 'Editor\EditorController@lodgingPhotoListing')->name('lodging-photo-listing-editor')->middleware('can:viewEditor,App\User');
    Route::get('/narrative-listing-editor/{scheduleId}', 'Editor\EditorController@narrativeListing')->name('narrative-listing-editor')->middleware('can:viewEditor,App\User');
    Route::get('/delete-visit-detail-editor/{type}/{category}', 'Editor\EditorController@deleteByTypeConsultant')->name('delete-visit-detail-editor')->middleware('can:viewEditor,App\User');


    Route::get('/add-narrative-editor/{scheduleId}', 'Editor\EditorController@addNarrative')->name('narrative-editor')->middleware('can:viewEditor,App\User');
    Route::post('/narrative-post-editor/', 'Editor\EditorController@addNarrativePost')->name('narrative-post-editor')->middleware('can:viewEditor,App\User');


    Route::get('/add-lodging-editor/{scheduleId}', 'Editor\EditorController@addLodging')->name('lodging-editor')->middleware('can:viewEditor,App\User');
    Route::post('/add-lodging-post-editor', 'Editor\EditorController@addLodgingPost')->name('lodging-post-editor')->middleware('can:viewEditor,App\User');


    Route::get('/add-outlet-editor/{scheduleId}', 'Editor\EditorController@addOutlet')->name('outlet-editor')->middleware('can:viewEditor,App\User');
    Route::post('/add-outlet-post-editor', 'Editor\EditorController@addOutletPost')->name('outlet-post-editor')->middleware('can:viewEditor,App\User');
    Route::get('/edit-outlet-editor/{oultetId}', 'Editor\EditorController@editOutlet')->name('edit-outlet-editor')->middleware('can:viewEditor,App\User');
    Route::post('/edit-outlet-post-editor/{oultetId}', 'Editor\EditorController@editOutlet_Post')->name('edit-outlet-post-editor')->middleware('can:viewEditor,App\User');

    Route::get('/transaction-editor/{scheduleId}', 'Editor\EditorController@transaction')->name('transaction-editor')->middleware('can:viewEditor,App\User');
    Route::post('/transaction-post-editor/{scheduleId}', 'Editor\EditorController@transaction_post')->name('transaction-post-editor')->middleware('can:viewEditor,App\User');
    Route::get('/transaction-listing-editor/{scheduleId}', 'Editor\EditorController@transaction_listing')->name('transaction-listing-editor')->middleware('can:viewEditor,App\User');


    Route::get('/detail-category-marks-editor/{scheduleId}/{catId}',  'Editor\QuestionController@questionCategory')->name('detail-category-marks-editor')->middleware('can:viewEditor,App\User');
    Route::get('/edit-detail-category-marks-editor/{scheduleId}/{catId}',  'Editor\QuestionController@questionEditCategory')->name('edit-detail-category-marks-editor')->middleware('can:viewEditor,App\User');
    Route::post('/marks-value-post-editor/',  'Editor\QuestionController@marksValuePost')->name('marks-value-post-editor')->middleware('can:viewEditor,App\User');
    Route::post('/edit-marks-value-post-editor/',  'Editor\QuestionController@marksEditValuePost')->name('edit-marks-value-post-editor')->middleware('can:viewEditor,App\User');

    Route::post('/add-question-schedule-post-editor', 'Editor\QuestionController@scheduleQuestionPostAdd')->name('add-question-schedule-post-editor')->middleware('can:viewEditor,App\User');



});
Route::group(['prefix' => 'client', 'middleware' => ['auth']], function () {
    Route::get('/client-notifications', 'Client\DashBoardController@readAllNotifications')->name('read-all-client-notifications');

    Route::get('/dashboard', 'Client\DashBoardController@indexClient')->name('client-dashboard')->middleware('can:viewClient,App\User');

    Route::get('/edit-profile-client/', 'Client\DashBoardController@editProfile')->name('edit-profile-client')->middleware('can:viewClient,App\User');
    Route::post('/edit-profile-post/{userId}', 'Admin\UserController@editProfilePost')->name('edit-profile-post');


    Route::get('/schedule-listing-client', 'Client\ScheduleController@scheduleListing')->name('scheduleListingClient')->middleware('can:viewClient,App\User');

    Route::get('/visit-detail/{scheduleId}', 'Client\ScheduleController@reviewEvaluation')->name('visit-detail-Client')->middleware('can:viewClient,App\User');

    Route::get('/report-detail/{scheduleId}/{catId}', 'Client\ScheduleController@questionMarks')->name('report-detail-Client')->middleware('can:viewClient,App\User');
    Route::get('/report-detail-outlet/{scheduleId}/{catId}', 'Client\ScheduleController@questionOutletMarks')->name('report-detail-outlet-Client')->middleware('can:viewClient,App\User');

    Route::get('/summary-score/{scheduleId}', 'Client\ScheduleController@summaryReport')->name('summary-score')->middleware('can:viewClient,App\User');

});
