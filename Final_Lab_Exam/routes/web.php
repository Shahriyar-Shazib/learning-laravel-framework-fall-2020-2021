<?php

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
Route::get('login/','loginController@Viewlogin')->name('Viewlogin');
Route::get('logout/','loginController@viewlogout')->name('viewlogout');
Route::post('login/','loginController@Viewafterlogin')->name('Viewafterlogin');
Route::get('Admin/Emplist','UserModelController@viewemplistad')->name('viewemplistad');
Route::get('Admin/insert','UserModelController@viewinsert')->name('viewinsertad');
Route::post('Admin/insert','UserModelController@viewinsertpad')->name('viewinsertpad');

Route::get('signup/','loginController@viewsignup')->name('viewsignup');
Route::post('signup/','loginController@viewsignupsub')->name('viewsignupsub');
//route::group(["middleware"=>['sass']],function(){

/*Route::get('Admin/post/','adminControllerad@Viewpostad')->name('Admin.Viewpostad');
Route::get('Admin/insert','adminControllerad@Viewinsertad')->name('Admin.Viewinsertad');
Route::get('Admin/PendingPostReq/','adminControllerad@ViewPendingpostad')->name('Admin.ViewPendingPostReqad');
Route::get('Admin/PendingSignupReq','adminControllerad@ViewPendingSignupReqad')->name('Admin.ViewPendingSignupReqad');
Route::get('Admin/Adminlist/','adminControllerad@ViewAdminlistad')->name('Admin.ViewAdminlistad');*/

//})

