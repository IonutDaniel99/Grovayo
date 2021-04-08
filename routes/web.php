<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




Route::get('/', 'App\Http\Responses\LoginResponse@toWelcome')->name('Welcome');
Route::get('redirects', 'App\Http\Responses\LoginResponse@toResponse')->name('Redirects');

/* FACEBOOK AND GOOGLE CONNECTIONS */
Route::get('/auth/facebook', 'App\Http\Controllers\Api\SocialController@facebookRedirect')->name('FacebookRedirect');
Route::get('/auth/facebook/callback', 'App\Http\Controllers\Api\SocialController@loginWithFacebook')->name('FacebookLogin');
Route::get('/auth/google', 'App\Http\Controllers\Api\SocialController@googleRedirect')->name('GoogleRedirect');
Route::get('/auth/google/callback', 'App\Http\Controllers\Api\SocialController@loginWithGoogle')->name('GoogleLogin');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Home', 'App\Http\Controllers\www\User\HomeController@index')->name('Home');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Weather', 'App\Http\Controllers\www\User\WeatherController@index')->name('Weather');
Route::post('/Weather/Store', 'App\Http\Controllers\www\User\WeatherController@store')->name('weather.store');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Blog', 'App\Http\Controllers\www\User\BlogController@index')->name('Blog');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Search', 'App\Http\Controllers\www\User\SearchController@index')->name('Search');


// ######################## Profile Page ###########################
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Activity', 'App\Http\Controllers\www\User\Auth_User\ActivityController@index')->name('Profile_Activity_Index');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/About', 'App\Http\Controllers\www\User\Auth_User\AboutController@index')->name('Profile_About_Index');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Followers', 'App\Http\Controllers\www\User\Auth_User\FollowersController@index')->name('Profile_Followers_Index');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Following', 'App\Http\Controllers\www\User\Auth_User\FollowingController@index')->name('Profile_Following_Index');

#region User Personal Info

// ####################### Personal Info #################################
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Personal-Info', 'App\Http\Controllers\www\User\Auth_User\Settings\PersonalInfoController@index')->name("Settings_Personal_Info_Index");
Route::post('/Personal-Info/Store', 'App\Http\Controllers\www\User\Auth_User\Settings\PersonalInfoController@update')->name('Settings_Personal_Info_Update');

Route::get('/Personal-Info/country-state-city', 'App\Http\Controllers\www\User\Auth_User\Settings\PersonalInfoController@index');
Route::post('/Personal-Info/get-states-by-country', 'App\Http\Controllers\www\User\Auth_User\Settings\PersonalInfoController@getState');
Route::post('/Personal-Info/get-cities-by-state', 'App\Http\Controllers\www\User\Auth_User\Settings\PersonalInfoController@getCity');

// ####################### Profile #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Profile', 'App\Http\Controllers\www\User\Auth_User\Settings\ProfileController@index')->name("Settings_Profile_Index");
Route::post('/Profile/Update/ProfileImage', 'App\Http\Controllers\www\User\Auth_User\Settings\ProfileController@setProfileImage')->name('Settings_Profile_Profile_Photo');
Route::post('/Profile/Update/BackgroundImage', 'App\Http\Controllers\www\User\Auth_User\Settings\ProfileController@setBackgroundImage')->name('Settings_Profile_Background_Photo');
Route::post('/Profile/Update/ProfileVisibility', 'App\Http\Controllers\www\User\Auth_User\Settings\ProfileController@setProfileVisibility')->name('Settings_Profile_Visibility');

// ####################### Friend Request #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Requests', 'App\Http\Controllers\www\User\Auth_User\Settings\FriendsRequestController@index')->name("Settings_Friends_Request_Index");
Route::post('/Friends-Request', 'App\Http\Controllers\www\User\Auth_User\Settings\FriendsRequestController@store')->name('Settings_Friends_Request_Store');

// ####################### Social Networks #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Social-Networks', 'App\Http\Controllers\www\User\Auth_User\Settings\SocialNetworksController@index')->name("Settings_Social_Networks_Index");
Route::post('/Social-Networks/Update', 'App\Http\Controllers\www\User\Auth_User\Settings\SocialNetworksController@update')->name('Settings_Social_Networks_Update');

// ####################### Email Settings #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Email-Settings', 'App\Http\Controllers\www\User\Auth_User\Settings\EmailSettingsController@index')->name("Settings_Email_Index");
Route::post('/Email-Settings/Update', 'App\Http\Controllers\www\User\Auth_User\Settings\EmailSettingsController@update')->name('Settings_Email_Update');

// ####################### User Notification Settings #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Notification-Settings', 'App\Http\Controllers\www\User\Auth_User\Settings\NotificationSettingsController@index')->name("Settings_User_Notification_Index");
Route::post('/Notification-Settings/Update', 'App\Http\Controllers\www\User\Auth_User\Settings\NotificationSettingsController@update')->name('Settings_User_Notification_Update');

// ####################### Security #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Security', 'App\Http\Controllers\www\User\Auth_User\Settings\SecurityController@index')->name("Settings_Security_Index");

// ####################### Change Password #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Change-Password', 'App\Http\Controllers\www\User\Auth_User\Settings\ChangePasswordController@index')->name("Settings_Change_Password_Index");
Route::post('/Change-Password/Update', 'App\Http\Controllers\www\User\Auth_User\Settings\ChangePasswordController@update')->name('Settings_Change_Password_Update');

// ####################### Disable Account #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Disable-Account', 'App\Http\Controllers\www\User\Auth_User\Settings\DisableAccountController@index')->name("Settings_Disable_Account_Index");
Route::post('/Disable-Account/Facebook/Delete', 'App\Http\Controllers\www\User\Auth_User\Settings\DisableAccountController@Facebook_Delete')->name('Settings_Delete_Facebook_Account');
Route::post('/Disable-Account/Google/Delete', 'App\Http\Controllers\www\User\Auth_User\Settings\DisableAccountController@Google_Delete')->name('Settings_Delete_Google_Account');

#endregion

// ############################ ADMIN ###############################

Route::middleware(['auth:sanctum', 'verified', 'role:Support|Moderator|Administrator|Owner'])->get('/Admin', 'App\Http\Controllers\www\Admin\AdminController@index')->name("Admin_Dashboard_Index");

// ########################### USER PROFILE #########################

Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}', 'App\Http\Controllers\www\User\View_User\UserActivityController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/Activity', 'App\Http\Controllers\www\User\View_User\UserActivityController@index')->name("UserActivity");
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/About', 'App\Http\Controllers\www\User\View_User\UserAboutController@index')->name("UserAbout");
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/Followers', 'App\Http\Controllers\www\User\View_User\UserFollowerController@index')->name("UserFollowers");
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/Following', 'App\Http\Controllers\www\User\View_User\UserFollowingController@index')->name("UserFollowing");

// ############################ Email Middleware ####################

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/Home');
})->middleware(['auth', 'signed'])->name('verification.verify');

// ####################### Personal Info #################################
Route::get('/Debug', 'App\Http\Controllers\Debug\Debug@index')->name("Debug");
Route::get('/News', 'App\Http\Controllers\Api\ApiController@callNewsApi');
Route::get('/NewsDelete', 'App\Http\Controllers\Api\ApiController@callNewsApiDelete');
