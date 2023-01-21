<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CleaningController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WashingController;
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



Route::get('/landingpage', [AdminController::class, 'landingPage']);



Route::middleware(['auth', 'isAdmin'])->group(function(){
// All Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/appointment', [DashboardController::class, 'appointment'])->name('appointment');
Route::get('/revenue', [DashboardController::class, 'revenue'])->name('revenue');
Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');


// All Employee Routes
Route::get('/createemployee', [EmployeeController::class, 'createEmployee'])->name('create.employee');
Route::post('/createemployeesave', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/editemployee{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/updateemployee{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('/deleteemployee{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employeetable', [EmployeeController::class, 'show'])->name('employee.table');


//All Services Routes
Route::get('/create', [ServiceController::class, 'create'])->name('create.service');
Route::post('/create-service', [ServiceController::class, 'store'])->name('service.store');
Route::get('/editservice{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::post('/updateservice{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/deleteservice{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
Route::get('/servicetable', [ServiceController::class, 'show'])->name('service.table');


// All Categories Routes
Route::get('/editcategory{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::post('/updatecategory{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/deletecategory{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
Route::get('/category-table', [CategoriesController::class, 'show'])->name('category.table');


// All Users Routes
Route::get('/usertable', [DashboardController::class, 'userTable'])->name('user.table');



// Route for Logout
Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');


});


Route::middleware(['auth'])->group(function(){

    Route::get('/edit', [AdminController::class, 'edit'])->name('drycleaning.edit');
    Route::post('/edit/{id}', [AdminController::class, 'update'])->name('drycleaning.update');
    Route::get('/delete/{id}', [AdminController::class, 'destroy'])->name('drycleaning.destroy');
    Route::get('/create-category', [AdminController::class, 'createCategory']);
    Route::post('/create-categories', [AdminController::class, 'storeCategory'])->name('categories.store');
    Route::get('feature-field', function () {
        $view = view('admin.feature-field')->render();
        return response()->json(['data' => $view]);
    })->name('feature-field');
    Route::get('/home', [ProfileController::class, 'index'])->name('home');
    Route::get('/profile{id}', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/profile{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/info', [ProfileController::class, 'info'])->name('info');
    Route::get('/change-password', [ProfileController::class, 'changePassword'])->name('change-password');
    Route::post('/change-password', [ProfileController::class, 'updatePassword'])->name('update-password');


    Route::get('/drycleaning', [AdminController::class, 'drycleaning'])->name('dry.cleaning');
    Route::get('/homecleaning', [AdminController::class, 'homecleaning'])->name('home.cleaning');
    Route::get('/washing{id}', [AdminController::class, 'washing'])->name('washing');

    // Route::get('/bookinspection', [CategoryController::class, 'bookInspection']);
    // Route::get('/bookcleaning', [CategoryController::class, 'bookCleaning']);

});
