<?php

use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EvaluationTestController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ListeningController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SessionDurationController;
use App\Http\Controllers\Admin\SessionStartDateController;
use App\Http\Controllers\Admin\SessionTimeController;
use App\Http\Controllers\Admin\SpeakingController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Course
    Route::resource('courses', CourseController::class, ['except' => ['store', 'update', 'destroy']]);

    // Session Duration
    Route::resource('session-durations', SessionDurationController::class, ['except' => ['store', 'update', 'destroy']]);

    // Session Time
    Route::resource('session-times', SessionTimeController::class, ['except' => ['store', 'update', 'destroy']]);

    // Session Start Date
    Route::resource('session-start-dates', SessionStartDateController::class, ['except' => ['store', 'update', 'destroy']]);

    // Evaluation Test
    Route::resource('evaluation-tests', EvaluationTestController::class, ['except' => ['store', 'update', 'destroy']]);

    // Question
    Route::resource('questions', QuestionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Answer
    Route::resource('answers', AnswerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Candidate
    Route::resource('candidates', CandidateController::class, ['except' => ['store', 'update', 'destroy']]);

    // Bill
    Route::resource('bills', BillController::class, ['except' => ['store', 'update', 'destroy']]);

    // Listening
    Route::post('listenings/media', [ListeningController::class, 'storeMedia'])->name('listenings.storeMedia');
    Route::resource('listenings', ListeningController::class, ['except' => ['store', 'update', 'destroy']]);

    // Speaking
    Route::resource('speakings', SpeakingController::class, ['except' => ['store', 'update', 'destroy']]);
});
