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
// Blog
Route::get('blog', [AdminsController::class, 'blog'])->middleware('is_admin');
Route::get('addBlog', [AdminsController::class, 'addBlog'])->middleware('is_admin');
Route::post('add_Blog', [AdminsController::class, 'add_Blog'])->middleware('is_admin');
Route::get('editBlog/{id}', [AdminsController::class, 'editBlog'])->middleware('is_admin');
Route::post('edit_Blog/{id}', [AdminsController::class, 'edit_Blog'])->middleware('is_admin');
Route::get('delete_Blog/{id}', [AdminsController::class, 'delete_Blog'])->middleware('is_admin');
// Services
Route::get('services', [AdminsController::class, 'services'])->middleware('is_admin');
Route::get('addService', [AdminsController::class, 'addService'])->middleware('is_admin');
Route::post('add_Service', [AdminsController::class, 'add_Service'])->middleware('is_admin');
Route::get('editService/{id}', [AdminsController::class, 'editService'])->middleware('is_admin');
Route::post('edit_Service/{id}', [AdminsController::class, 'edit_Service'])->middleware('is_admin');
Route::get('delete_Service/{id}', [AdminsController::class, 'delete_Service'])->middleware('is_admin');
// AboutUs
Route::get('about', [AdminsController::class, 'about'])->middleware('is_admin');
Route::get('editAbout/{select}', [AdminsController::class, 'editAbout'])->middleware('is_admin');
Route::post('edit_About', [AdminsController::class, 'edit_About'])->middleware('is_admin');
// Banners
Route::get('banners', [AdminsController::class, 'banners'])->middleware('is_admin');
Route::get('editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
Route::post('edit_Banner/{id}', [AdminsController::class, 'edit_Banner'])->middleware('is_admin');
// Testimonials
Route::get('testimonials', [AdminsController::class, 'testimonials'])->middleware('is_admin');
Route::get('addTestimonial', [AdminsController::class, 'addTestimonial'])->middleware('is_admin');
Route::post('add_Testimonial', [AdminsController::class, 'add_Testimonial'])->middleware('is_admin');
Route::get('editTestimonial/{id}', [AdminsController::class, 'editTestimonial'])->middleware('is_admin');
Route::post('edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial'])->middleware('is_admin');
//Manage Users
Route::get('users', [AdminsController::class, 'users'])->middleware('is_admin');
Route::get('admins', [AdminsController::class, 'admins'])->middleware('is_admin');
Route::get('addUser', [AdminsController::class, 'addUser'])->middleware('is_admin');
Route::get('editUser/{id}', [AdminsController::class, 'editUser'])->middleware('is_admin');
Route::post('add_User', [AdminsController::class, 'add_User'])->middleware('is_admin');
Route::post('edit_User/{id}', [AdminsController::class, 'edit_User'])->middleware('is_admin');
Route::get('delete_user/{id}', [AdminsController::class, 'delete_user'])->middleware('is_admin');
Route::get('switchRole/{id}', [AdminsController::class, 'switchRole'])->middleware('is_admin');
Route::get('switchStatus/{id}', [AdminsController::class, 'switchStatus'])->middleware('is_admin');
// Sliders
Route::get('sliders', [AdminsController::class, 'slider'])->middleware('is_admin');
Route::get('addSlider', [AdminsController::class, 'addSlider'])->middleware('is_admin');
Route::post('add_Slider', [AdminsController::class, 'add_Slider'])->middleware('is_admin');
Route::get('editSlider/{id}', [AdminsController::class, 'editSlider'])->middleware('is_admin');
Route::post('edit_Slider/{id}', [AdminsController::class, 'edit_Slider'])->middleware('is_admin');
Route::get('deleteSlider/{id}', [AdminsController::class, 'deleteSlider'])->middleware('is_admin');



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
Route::post('deleteServiceAjax', [AdminsController::class, 'deleteServiceAjax'])->middleware('is_admin');


});

