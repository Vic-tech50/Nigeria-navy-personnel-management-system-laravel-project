<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\addEmployeeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserDashController;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
// use Hash;

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

Route::get('/', function () {
    
// alert('Title','Lorem Lorem Lorem', 'success');
    // Alert::success('Success Title', 'Success Message');
    return view('auth.login');
});


Route::get('/pass', function () {
    
echo bcrypt('welcomeworld');
});



// Route::get('admin/add_employee', [addEmployeeController::class, 'index']);



Route::resource('employee', EmployeeController::class);
Route::resource('payroll', PayrollController::class);

Route::post('promoteWorker', [EmployeeController::class, 'promoteWorker']);
Route::post('sackWorker', [EmployeeController::class, 'sackWorker']);
Route::post('/poa', [EmployeeController::class, 'update_poa']);

Route::get('sacked_employee', [EmployeeController::class, 'viewSackEmployee']);
Route::get('profile', [EmployeeController::class, 'profile']);
Route::post('pardonWorker', [EmployeeController::class, 'pardonWorker']);
Route::post('letter', [EmployeeController::class, 'letterSack']);

Route::get('message', [MessageController::class, 'index']);
Route::post('mess', [MessageController::class, 'storeMessage']);


Route::post('showPayroll', [PayrollController::class, 'showPayroll']);

Route::get('newsletter', [NewsletterController::class, 'index']);
Route::post('newsletter', [NewsletterController::class, 'newsletter']);

Route::get('settings', [SettingsController::class, 'index']);
Route::get('user_profile', [SettingsController::class, 'user_profile']);
Route::post('admin_pass', [SettingsController::class, 'admin_pass']);
Route::post('update_profile', [SettingsController::class, 'update_profile']);
Route::post('update_user_profile', [SettingsController::class, 'update_user_profile']);

Route::get('submit_assignment', [UserDashController::class, 'submit_assignment']);
Route::post('submit_assignment', [UserDashController::class, 'assignment_upload']);
Route::get('history', [UserDashController::class, 'history']);
Route::get('take_a_leave', [UserDashController::class, 'take_a_leave']);
Route::get('on_leave', [EmployeeController::class, 'on_leave']);
Route::post('approve_leave', [EmployeeController::class, 'approve_leave']);
Route::post('cancel_leave', [EmployeeController::class, 'cancel_leave']);
Route::get('assignment', [EmployeeController::class, 'assignment']);
Route::post('assignment', [EmployeeController::class, 'confirm_assignment']);
Route::post('change_image', [EmployeeController::class, 'change_image']);
Route::post('refresh', [EmployeeController::class, 'refresh']);
Route::post('delete_leave', [EmployeeController::class, 'delete_leave']);
Route::post('delete_assignment', [EmployeeController::class, 'delete_assignment']);

Route::get('search',[EmployeeController::class, 'search']);


Route::post('take_a_leave', [UserDashController::class, 'send_leave_purpose']);












Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


// Route::middleware(['auth', 'user-access:block'])->group(function () {
  
//     Route::get('/account/blocked', [HomeController::class, 'block'])->name('block');
// });
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/account/blocked', [HomeController::class, 'managerHome'])->name('manager.home');
});
