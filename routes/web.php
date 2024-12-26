<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;

//เส้นทางไปหน้าหลักส่งข้อมูลไปหน้าเว็บตรวจสอบว่าในRouteมีล็อคอินสมัครสมาชิกไหม
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//เส้นทางที่มีตัวกลางเป็นmiddlewareระบบตรวจสอบว่าล็อคอินยืนยันอีเมลยังและจะเข้าไปหน้าโปรไฟล์
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//เส้นทางสำหรับการจัดการchirps
Route::resource('chirps', ChirpController::class)
->only(['index', 'store', 'update', 'destroy'])
->middleware(['auth', 'verified']);
Route::resource('product', ProductController::class)
->only(['index', 'show'])
->middleware(['auth', 'verified']);

Route::get('/greeting', function () {
    return 'Hello World';
});


///user เรียก UserController@index
///products เรียก ProductController@index
//products/{id} เรียก ProductController@showดูราายการสินค้า
//require auth.php โหลดเส้นทางยืนยันตัวตน
//Returnshowเป้นการคืนค่าแสดงหน้าโชว์โปรดัก

Route::get('/user', [UserController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

require __DIR__.'/auth.php';
