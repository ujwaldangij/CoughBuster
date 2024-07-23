<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HCPController;
use App\Http\Controllers\QuizController;

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



Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/registerhcp', [AuthController::class, 'registerhcp'])->middleware('auth')->name('registerhcp');
Route::post('/registerhcp', [AuthController::class, 'handleFormSubmission'])->name('registerhcp.submit');

Route::get('/register-hcp', [HCPController::class, 'showForm'])->name('registerhcp.form');
Route::post('/register-hcp', [HCPController::class, 'submitForm'])->name('registerhcp.submit');
Route::get('/register-hcp/success/{id}', [HCPController::class, 'success'])->name('registerhcp.success');

// routes/web.php

Route::get('/questions', [QuizController::class, 'index'])->name('questions.index');
Route::post('/check-answer', [QuizController::class, 'checkAnswer'])->name('check.answer');
Route::post('/check-answe2', [QuizController::class, 'checkAnswer2'])->name('check.answer2');
// Route::get('/thank-you', function () {
//     return view('thank-you')->name('thank-you');
// });


Route::get('/next', [QuizController::class, 'nextPage'])->name('next.page');
Route::get('/thankyou', [QuizController::class, 'thankyou'])->name('thankyou');