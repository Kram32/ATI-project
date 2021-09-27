<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrainingsController;
use App\Http\Controllers\AddFormController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SurveyFormController;
use App\Http\Controllers\ContactCenter\ContactCenterController;
use App\Http\Controllers\ContactCenter\InquiryController;
use App\Http\Controllers\ContactCenter\ViewTicketsController;
use App\Http\Controllers\ContactCenter\RespondController;
use App\Http\Controllers\Profile\AccountInfoController;
use App\Http\Controllers\Profile\CareerInfoController;
use App\Http\Controllers\Profile\CertificationsController;
use App\Http\Controllers\Profile\DashboardController;
use App\Http\Controllers\Profile\EducationalBackgroundController;
use App\Http\Controllers\Profile\EligibilityController;
use App\Http\Controllers\Profile\EmploymentController;
use App\Http\Controllers\Profile\PersonalInfoController;
use App\Http\Controllers\Profile\IdentificationController;

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
//     return view('welcome');
// });



/* DASHBOARD ROUTE */
Route::get('/userdashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/survey',[SurveyController::class,'index'])->name('surveyPage');
Route::get('/surveyForm',[SurveyFormController::class,'index'])->name('surveyForm');
Route::get('/contactcenter',[ContactCenterController::class,'index'])->name('contactCenter');
Route::get('/trainings',[TrainingsController::class,'index'])->name('trainings');
Route::get('/addTraining',[AddFormController::class,'index'])->name('addTrainings');

/* DASHBOARD - ADD DETAILS */
Route::get('/careerInformation', [CareerInfoController::class,'create'])->name('addCareerDetails'); //add Career Information
Route::get('/educationalBackground', [EducationalBackgroundController::class,'create'])->name('addEducationalBackground'); //add Educational Background
Route::get('/eligibility', [EligibilityController::class,'create'])->name('addEligibility'); //add Eligibility
Route::get('/certifications', [CertificationsController::class,'create'])->name('addCertifications'); //add Certifications

/* DASHBOARD - EDIT DETAILS */
Route::get('/editPersonalDetails', [PersonalInfoController::class,'index'])->name('editPersonalDetails'); //edit Personal Information
Route::get('/editOtherAccountInfo', [AccountInfoController::class,'index'])->name('editOtherAccountInfo'); //edit Account Information
Route::get('/editCurrentEmployment', [EmploymentController::class,'index'])->name('editCurrentEmployment'); //edit Current Employment
Route::get('/editIdentificationCard', [IdentificationController::class,'index'])->name('editIdentificationCard'); //edit Identification Card

/* CONTACT CENTER */
Route::get('/contactCenter/inquiry', [InquiryController::class,'index'])->name('inquiry');
Route::get("/contactCenter/viewTickets", [ViewTicketsController::class, "index"])->name("viewTickets");     
Route::get("/contactCenter/respond", [RespondController::class, "index"])->name("respond");


// AUTH ROUTES
Route::get("/", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");
Route::post("/save", [AuthController::class, "save"])->name("save");

