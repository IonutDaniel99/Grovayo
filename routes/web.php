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

Route::get('/', function () {
    return view('welcome');
});

Route::get('redirects', 'App\Http\Responses\LoginResponse@toResponse')->name('Redirects');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Home', 'App\Http\Controllers\HomeController@index')->name('Home');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Discussion', 'App\Http\Controllers\DiscussionController@index')->name('Discussion');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Weather', 'App\Http\Controllers\WeatherController@index')->name('Weather');
Route::post('/Weather/Store', 'App\Http\Controllers\WeatherController@store')->name('weather.store');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Blog', 'App\Http\Controllers\BlogController@index')->name('Blog');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Profile', 'App\Http\Controllers\ProfileController@index')->name('Profile');



// ######################## Profile Page ###########################
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Activity', 'App\Http\Controllers\MainProfile\ActivityController@index')->name('ProfileActivity');

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/About', function () {
    return view('livewire.profile.about');
})->name('ProfileAbout');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Profile-Discussion', function () {
    return view('livewire.profile.discussion');
})->name('ProfileDiscussion');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Followers', function () {
    return view('livewire.profile.followers');
})->name('ProfileFollowers');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Following', function () {
    return view('livewire.profile.following');
})->name('ProfileFollowing');
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Messages', function () {
    return view('livewire.profile.messages');
})->name('Messages');

// ####################### Personal Info #################################
Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Personal-Info', 'App\Http\Controllers\MainProfile\Settings\PersonalInfoController@index')->name("Settings_Personal_Info_Index");
Route::post('/Personal-Info/Store', 'App\Http\Controllers\MainProfile\Settings\PersonalInfoController@update')->name('Settings_Personal_Info_Update');

Route::get('/Personal-Info/country-state-city', 'App\Http\Controllers\MainProfile\Settings\PersonalInfoController@index');
Route::post('/Personal-Info/get-states-by-country', 'App\Http\Controllers\MainProfile\Settings\PersonalInfoController@getState');
Route::post('/Personal-Info/get-cities-by-state', 'App\Http\Controllers\MainProfile\Settings\PersonalInfoController@getCity');

// ####################### Profile #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Profile', 'App\Http\Controllers\MainProfile\Settings\ProfileController@index')->name("Settings_Profile_Index");
Route::post('/Profile/Update', 'App\Http\Controllers\MainProfile\Settings\ProfileController@update')->name('Settings_Profile_Update');

// ####################### Friend Request #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Requests', 'App\Http\Controllers\MainProfile\Settings\FriendsRequests@index')->name("Settings_Friends_Request_Index");
Route::post('/Friends-Request', 'App\Http\Controllers\MainProfile\Settings\FriendsRequests@store')->name('Settings_Friends_Request_Store');

// ####################### All Notification #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Notifications', 'App\Http\Controllers\MainProfile\Settings\NotificationController@index')->name("Settings_All_Notification_Index");
Route::post('/All-Notifications', 'App\Http\Controllers\MainProfile\Settings\NotificationController@store')->name('Settings_All_Notification_Store');

// ####################### Social Networks #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Social-Networks', 'App\Http\Controllers\MainProfile\Settings\SocialNetworksController@index')->name("Settings_Social_Networks_Index");
Route::post('/Social-Networks/Update', 'App\Http\Controllers\MainProfile\Settings\SocialNetworksController@update')->name('Settings_Social_Networks_Update');

// ####################### Email Settings #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Email-Settings', 'App\Http\Controllers\MainProfile\Settings\EmailSettingsController@index')->name("Settings_Email_Index");
Route::post('/Email-Settings/Update', 'App\Http\Controllers\MainProfile\Settings\EmailSettingsController@update')->name('Settings_Email_Update');

// ####################### User Notification Settings #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Notification-Settings', 'App\Http\Controllers\MainProfile\Settings\NotificationSettingsController@index')->name("Settings_User_Notification_Index");
Route::post('/Notification-Settings', 'App\Http\Controllers\MainProfile\Settings\NotificationSettingsController@store')->name('Settings_User_Notification_Store');

// ####################### Security #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Security', 'App\Http\Controllers\MainProfile\Settings\SecurityController@index')->name("Settings_Security_Index");

// ####################### Change Password #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Change-Password', 'App\Http\Controllers\MainProfile\Settings\ChangePasswordController@index')->name("Settings_Change_Password_Index");
Route::post('/Change-Password/Update', 'App\Http\Controllers\MainProfile\Settings\ChangePasswordController@update')->name('Settings_Change_Password_Update');

// ####################### Disable Account #################################

Route::middleware(['auth:sanctum', 'verified', 'role:User'])->get('/Disable-Account', 'App\Http\Controllers\MainProfile\Settings\DisableAccountController@index')->name("Settings_Disable_Account_Index");


// ############################ ADMIN ###############################

Route::middleware(['auth:sanctum', 'verified', 'role:Support|Moderator|Administrator|Owner'])->get('/Admin', 'App\Http\Controllers\Admin\DashboardController@index')->name("Admin_Dashboard_Index");



// ########################### USER PROFILE #########################
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}', 'App\Http\Controllers\UserProfile\UserActivityController@index');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/Activity', 'App\Http\Controllers\UserProfile\UserActivityController@index')->name("UserActivity");
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/About', 'App\Http\Controllers\UserProfile\UserAboutController@index')->name("UserAbout");
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/Followers', 'App\Http\Controllers\UserProfile\UserFollowerController@index')->name("UserFollowers");
Route::middleware(['auth:sanctum', 'verified'])->get('/user/{username}/Following', 'App\Http\Controllers\UserProfile\UserFollowingController@index')->name("UserFollowing");




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



Route::get('/Debug', 'App\Http\Controllers\Debug\Debug@index');
