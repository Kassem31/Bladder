<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\AssistantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceModelController;
use App\Http\Controllers\ObservationController;
use App\Http\Controllers\RepairStepController;
use App\Http\Controllers\InspectionTransactionController;
use App\Http\Controllers\RepairTransactionController;
// Bladder Management Controllers
use App\Http\Controllers\BladderSizeController;
use App\Http\Controllers\BladderController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\BladderTransactionController;
use App\Http\Controllers\FindingController;
use App\Http\Controllers\LanguageController;
use App\Mail\ResetPasswordMail;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

// Language switching route
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile/create-user', [ProfileController::class, 'createUser'])->name('users.create');
    Route::post('/profile/store-user', [ProfileController::class, 'storeUser'])->name('profile.storeUser');
    Route::get('/profile/reset-password', [ProfileController::class, 'showResetPasswordForm'])->name('profile.showResetPasswordForm');
    Route::post('/profile/reset-password', [ProfileController::class, 'resetPassword'])->name('profile.resetPassword');
    Route::post('/profile/logout', [ProfileController::class, 'logout'])->name('profile.logout');
    Route::get('/profile/show', [ProfileController::class, 'showProfile'])->name('profile.showProfile');
    Route::get('/users', [ProfileController::class, 'listUsers'])->name('users.index');
    Route::get('/users/{user}', [ProfileController::class, 'showUser'])->name('users.show');
    Route::get('/users/{user}/edit', [ProfileController::class, 'editUser'])->name('users.edit');
    Route::put('/users/{user}', [ProfileController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [ProfileController::class, 'destroyUser'])->name('users.destroy');

    Route::resource('roles', RoleController::class);

    // Bladder Management Routes
    Route::resource('bladder-sizes', BladderSizeController::class);
    Route::resource('bladders', BladderController::class);
    Route::resource('machines', MachineController::class);
    Route::resource('bladder-transactions', BladderTransactionController::class);
    
    // Special Transaction Creation Routes
    Route::get('/bladder-transactions/create/dismount', [BladderTransactionController::class, 'createDismount'])->name('bladder-transactions.create-dismount');
    Route::get('/bladder-transactions/create/maintenance', [BladderTransactionController::class, 'createMaintenance'])->name('bladder-transactions.create-maintenance');
    Route::get('/bladder-transactions/create/test', [BladderTransactionController::class, 'createTest'])->name('bladder-transactions.create-test');
    Route::get('/bladder-transactions/create/mount', [BladderTransactionController::class, 'createMount'])->name('bladder-transactions.create-mount');
    
    Route::resource('findings', FindingController::class);
});

require __DIR__ . '/auth.php';
