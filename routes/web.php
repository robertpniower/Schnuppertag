<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

// Home
Route::get('/', function () {
    return view('welcome');
});

// User routes

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/register', [UserController::class, 'create'])->name('users.register');
Route::post('/users/register', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/show', [UserController::class, 'show'])->name('user.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user_id}', [UserController::class, 'destroy'])->name('user.destroy');

// Company routes

Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::get('/company/{company}/show', [CompanyController::class, 'show'])->name('company.show');
Route::post('/company/create', [CompanyController::class, 'store'])->name('company.store');
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/{company}', [CompanyController::class, 'update'])->name('company.update');
Route::delete('/company/{company_id}', [CompanyController::class, 'destroy'])->name('company.destroy');

// Job routes
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/job/{job}', [JobController::class, 'show'])->name('job.show');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

//Category routes

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{category}/show', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category_id}', [CategoryController::class, 'destroy'])->name('category.destroy');




