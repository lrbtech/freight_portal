<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('website.home');
// });
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/', function() {
 return view('page.coomingsoon');
});

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});

Route::get('/map-test', function () {
    return view('website.mapTest');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
Route::get('/service', [App\Http\Controllers\HomeController::class, 'service']);
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);

Route::get('/get-service-data/{id}', [App\Http\Controllers\HomeController::class, 'getServiceData']);

Route::POST('/save-user-register', [App\Http\Controllers\HomeController::class, 'saveUserRegister']);

Route::POST('/contact-send-mail', [App\Http\Controllers\HomeController::class, 'contactsendmail']);
Route::POST('/newsletter-send-mail', [App\Http\Controllers\HomeController::class, 'newslettersendmail']);

Auth::routes();


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['prefix' => 'admin'],function(){

	Route::get('/login', [App\Http\Controllers\AdminLogin\LoginController::class, 'showLoginForm'])->name('admin.login');
	Route::post('/login', [App\Http\Controllers\AdminLogin\LoginController::class, 'login'])->name('admin.login.submit');
	Route::get('/logout', [App\Http\Controllers\AdminLogin\LoginController::class, 'logout'])->name('admin.logout');

	Route::post('/password/email', [App\Http\Controllers\AdminLogin\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
	Route::get('/password/reset', [App\Http\Controllers\AdminLogin\ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
	Route::post('/password/reset', [App\Http\Controllers\AdminLogin\ResetPasswordController::class, 'reset']);
	Route::get('/password/reset/{token}', [App\Http\Controllers\AdminLogin\ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');


	Route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'dashboard'])->name('admin.dashboard');

	//new-service
	Route::get('/new-service', [App\Http\Controllers\Admin\ServiceController::class, 'NewService']);
    Route::POST('/save-service', [App\Http\Controllers\Admin\ServiceController::class, 'saveService']);
    Route::POST('/update-service', [App\Http\Controllers\Admin\ServiceController::class, 'updateService']);
    Route::get('/edit-service/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'editService']);
	Route::get('/delete-service/{id}/{status}', [App\Http\Controllers\Admin\ServiceController::class, 'deleteService']);


    //truck
	Route::get('/truck', [App\Http\Controllers\Admin\TruckController::class, 'Truck']);
    Route::POST('/save-truck', [App\Http\Controllers\Admin\TruckController::class, 'saveTruck']);
    Route::POST('/update-truck', [App\Http\Controllers\Admin\TruckController::class, 'updateTruck']);
    Route::get('/edit-truck/{id}', [App\Http\Controllers\Admin\TruckController::class, 'editTruck']);
	Route::get('/delete-truck/{id}/{status}', [App\Http\Controllers\Admin\TruckController::class, 'deleteTruck']);

    Route::get('/assign-truck/{id}', [App\Http\Controllers\Admin\TruckController::class, 'AssignTruck']);
    Route::POST('/save-assign-truck', [App\Http\Controllers\Admin\TruckController::class, 'saveAssignTruck']);
    Route::POST('/update-assign-truck', [App\Http\Controllers\Admin\TruckController::class, 'updateAssignTruck']);
    Route::get('/edit-assign-truck/{id}', [App\Http\Controllers\Admin\TruckController::class, 'editAssignTruck']);
	Route::get('/delete-assign-truck/{id}/{status}', [App\Http\Controllers\Admin\TruckController::class, 'deleteAssignTruck']);
	

    Route::get('/change-password', [App\Http\Controllers\Admin\SettingsController::class, 'changePassword']);
    Route::POST('/change-password', [App\Http\Controllers\Admin\SettingsController::class, 'updateChangePassword']);

    Route::get('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'Settings']);
    Route::POST('/update-settings', [App\Http\Controllers\Admin\SettingsController::class, 'updateSettings']);

    Route::get('/about-us', [App\Http\Controllers\Admin\SettingsController::class, 'AboutUs']);
    Route::POST('/update-about-us', [App\Http\Controllers\Admin\SettingsController::class, 'updateAboutUs']);

    //testimonials
	Route::get('/testimonials', [App\Http\Controllers\Admin\SettingsController::class, 'testimonials']);
    Route::POST('/save-testimonials', [App\Http\Controllers\Admin\SettingsController::class, 'savetestimonials']);
    Route::POST('/update-testimonials', [App\Http\Controllers\Admin\SettingsController::class, 'updatetestimonials']);
    Route::get('/edit-testimonials/{id}', [App\Http\Controllers\Admin\SettingsController::class, 'edittestimonials']);
	Route::get('/delete-testimonials/{id}/{status}', [App\Http\Controllers\Admin\SettingsController::class, 'deletetestimonials']);

    //slider
	Route::get('/slider', [App\Http\Controllers\Admin\SettingsController::class, 'slider']);
    Route::POST('/save-slider', [App\Http\Controllers\Admin\SettingsController::class, 'saveslider']);
    Route::POST('/update-slider', [App\Http\Controllers\Admin\SettingsController::class, 'updateslider']);
    Route::get('/edit-slider/{id}', [App\Http\Controllers\Admin\SettingsController::class, 'editslider']);
	Route::get('/delete-slider/{id}/{status}', [App\Http\Controllers\Admin\SettingsController::class, 'deleteslider']);

    Route::get('/booking', [App\Http\Controllers\Admin\BookingController::class, 'booking']);
    Route::POST('/get-booking', [App\Http\Controllers\Admin\BookingController::class, 'getBooking']);
    Route::get('/checkbox-assign-agent', [App\Http\Controllers\Admin\BookingController::class, 'checkboxAssignAgent']);

    Route::get('/print-invoice/{id}', [App\Http\Controllers\Admin\BookingController::class, 'printInvoice']);

    Route::get('/delete-booking/{id}', [App\Http\Controllers\Admin\BookingController::class, 'deleteBooking']);

    Route::get('/invoice-send-mail/{id}', [App\Http\Controllers\Admin\BookingController::class, 'invoiceSendMail']);

    Route::get('/booking-report', [App\Http\Controllers\Admin\ReportController::class, 'bookingreport']);
    Route::POST('/get-booking-report/{date1}/{date2}', [App\Http\Controllers\Admin\ReportController::class, 'getbookingreport']);
    
});


Route::group(['prefix' => 'user'],function(){

    Route::get('/dashboard', [App\Http\Controllers\User\HomeController::class, 'dashboard'])->name('user.dashboard');
    
    Route::get('/new-booking', [App\Http\Controllers\User\BookingController::class, 'newBooking']);
    Route::get('/booking-details/{id}', [App\Http\Controllers\User\BookingController::class, 'BookingDetils']);
    Route::POST('/save-booking', [App\Http\Controllers\User\BookingController::class, 'saveBooking']);
    Route::get('/booking', [App\Http\Controllers\User\BookingController::class, 'booking']);
    Route::POST('/get-booking', [App\Http\Controllers\User\BookingController::class, 'getBooking']);

    Route::get('/print-invoice/{id}', [App\Http\Controllers\User\BookingController::class, 'printInvoice']);

    Route::get('/change-password', [App\Http\Controllers\User\SettingsController::class, 'changePassword']);
    Route::POST('/change-password', [App\Http\Controllers\User\SettingsController::class, 'updateChangePassword']);

    Route::get('/invoice-send-mail/{id}', [App\Http\Controllers\Admin\BookingController::class, 'invoiceSendMail']);

});



