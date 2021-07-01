<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GalleryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::POST('/send-message', [HomeController::class, 'send_message'])->name('send');



// Admins Panel

Auth::routes();
Route::group(['prefix'=>'admin'], function(){
Route::get('/', [AwardController::class, 'index'])->name('admin.home')->middleware('is_admin');

// Awards
Route::get('/awards', [AwardController::class, 'index'])->name('awards-create')->middleware('is_admin');
Route::post('/awards/store', [AwardController::class, 'store'])->name('awards-store')->middleware('is_admin');
Route::get('/awards/show', [AwardController::class, 'show'])->name('awards-show')->middleware('is_admin');
Route::get('/awards/edit', [AwardController::class, 'edit'])->name('awards-edit')->middleware('is_admin');
Route::post('/awards/update', [AwardController::class, 'update'])->name('awards-update')->middleware('is_admin');
Route::get('/awards/destroy', [AwardController::class, 'destroy'])->name('awards-destroy')->middleware('is_admin');


/* ...........................................######################............................................. */
// SiteSettings
Route::get('credentials', [AdminsController::class, 'systemsCredentials'])->middleware('is_admin');
Route::get('SiteSettings', [AdminsController::class, 'SiteSettings'])->middleware('is_admin');
Route::get('SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings'])->middleware('is_admin');
Route::get('logo-and-favicon', [AdminsController::class, 'logo_and_favicon'])->middleware('is_admin');
Route::post('logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update'])->middleware('is_admin');



// AJAX REQUESTS
Route::post('addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest'])->middleware('is_admin');
Route::post('deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax'])->middleware('is_admin');
Route::put('updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax'])->middleware('is_admin');
Route::put('updateMailerAjax', [AdminsController::class, 'updateMailerAjax'])->middleware('is_admin');
Route::put('updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax'])->middleware('is_admin');
Route::put('updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials'])->middleware('is_admin');
Route::post('deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax'])->middleware('is_admin');
Route::post('deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax'])->middleware('is_admin');
Route::post('deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax'])->middleware('is_admin');
Route::post('deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax'])->middleware('is_admin');
Route::post('deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax'])->middleware('is_admin');
Route::post('deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax'])->middleware('is_admin');
Route::post('deleteBalAjax', [AdminsController::class, 'deleteBalAjax'])->middleware('is_admin');
Route::post('deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax'])->middleware('is_admin');
Route::post('deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax'])->middleware('is_admin');
Route::post('deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax'])->middleware('is_admin');
Route::post('deleteUserAjax', [AdminsController::class, 'deleteUserAjax'])->middleware('is_admin');
Route::post('deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax'])->middleware('is_admin');
Route::post('deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax'])->middleware('is_admin');
Route::post('deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax'])->middleware('is_admin');
Route::post('deleteHowAjax', [AdminsController::class, 'deleteHowAjax'])->middleware('is_admin');
Route::post('deleteCoursesAjax', [AdminsController::class, 'deleteCoursesAjax'])->middleware('is_admin');
Route::post('deleteTopicsAjax', [AdminsController::class, 'deleteTopicsAjax'])->middleware('is_admin');
Route::post('deleteSignalsAjax', [AdminsController::class, 'deleteSignalsAjax'])->middleware('is_admin');

});

