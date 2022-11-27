<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\TaskController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------------------------s---------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register' => false]);

Route::get('/', ['middleware' => 'guest', function()
{
    Route::get('/home', function () {
        return view('auth.login');
    });
    Route::get('/', function () {
        return view('auth.login');
    });

}]);
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // route HomeController
    Route::get('/', function () {
        return view('dashboard/welcome');
    });
    Route::get('', [DashboardController::class, 'dashboard'])->name('admin.home');
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('admin.home');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.home');
    // route HomeController

    // route UserController
    Route::resource('users', UserController::class);
    Route::get('profileuser/{id}', [UserController::class, 'profileuser'])->name('profileuser');
    Route::any('updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');

    // route sittings
    Route::resource('settings', SettingController::class)->except(['show', 'store','create']);
    // route sittings

    // route tasks
    Route::resource('tasks', TaskController::class);
    // route tasks




    // 404 not found route
    // lear-cache route
    Route::get('/clear-cache', function () {
        // Artisan::call('route:cache');
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('view:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        Artisan::call('config:clear');
        Artisan::call('storage:link');
        return redirect()->back()->with('toast_success', __('clear cache Successfully'));
    })->name('clear_cache');
    // lear-cache route

});



// 404 not found route
Route::fallback(function () {
    $settings = Setting::first();
    return view('dashboard.404', compact('settings'));
});
// end route dashboard//
// end dashboard
