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
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SpeakingController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\CandidateController as CController;
    use Illuminate\Foundation\Auth\EmailVerificationRequest;
    use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/ar-markup',function (){
    return view('test-markup');
});

//Route::get('/logout',function (){
//    return to_route('filament.auth.logout');
//    //    return view('test-markup');
//})->name('logout');

//Route::get('/ar-import',[CController::class,'import'])->name('home');

Route::get('/',[CController::class,'index'])->name('home');

Route::get('/candidate/register',[CController::class,'register'])->name('candidate.register');

Route::group(['prefix' => 'candidate','middleware' => ['auth']],function (){
   Route::get('dashboard',[CController::class,'dashboard'])->name('candidate.dashboard');
   Route::get('course',[CController::class,'course'])->name('candidate.course');
   Route::get('personal',[CController::class,'personal'])->name('candidate.personal');
   Route::get('evaluation',[CController::class,'evaluation'])->name('candidate.evaluation');
   Route::get('evaluations',[CController::class,'evaluations'])->name('candidate.evaluations');
   Route::get('summary',[CController::class,'summary'])->name('candidate.summary');
   Route::get('invoice',[CController::class,'invoice'])->name('candidate.invoice');
   Route::get('invoices',[CController::class,'invoices'])->name('candidate.invoices');


   Route::get('evaluation/{id}',[CController::class,'evaluationSingle'])->name('candidate.evaluation_single');
});

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/');
    })->middleware(['auth', 'signed'])->name('verification.verify');



Route::group(['prefix' => 'admin-old', 'as' => 'admin.', 'middleware' => ['auth','is_admin']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Course
    Route::resource('courses', CourseController::class, ['except' => ['store', 'update', 'destroy']]);
    Route::get('courses/fee/{course}', [CourseController::class, 'fee'])->name('courses.fee');

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
    Route::post('candidates/media', [CandidateController::class, 'storeMedia'])->name('candidates.storeMedia');
    Route::resource('candidates', CandidateController::class, ['except' => ['store', 'update', 'destroy']]);

    // Bill
    Route::resource('bills', BillController::class, ['except' => ['store', 'update', 'destroy']]);

    // Listening
    Route::post('listenings/media', [ListeningController::class, 'storeMedia'])->name('listenings.storeMedia');
    Route::resource('listenings', ListeningController::class, ['except' => ['store', 'update', 'destroy']]);

    // Speaking
    Route::resource('speakings', SpeakingController::class, ['except' => ['store', 'update', 'destroy']]);

    // Setting
    Route::resource('settings', SettingController::class, ['except' => ['store', 'update', 'destroy']]);
});
