<?php

use Illuminate\Support\Facades\Route;
use App\Http\Constants\QRouteBackend;

Route::get('/login', QRouteBackend::namespaceBackend . 'AuthController@login')->name(QRouteBackend::AUTH_LOGIN);
Route::post('/authentication', QRouteBackend::namespaceBackend . 'AuthController@authentication')->name(QRouteBackend::AUTH_AUTHENTICATION);
Route::get('/logout', QRouteBackend::namespaceBackend . 'AuthController@logout')->name(QRouteBackend::AUTH_LOGOUT);
Route::get('/forgot-password', QRouteBackend::namespaceBackend . 'AuthController@forgotPassword')->name(QRouteBackend::AUTH_FORGOT_PASSWORD);

Route::get('/switch-language', 'LocalizationController@switchLanguage');

Route::get('/test', function (){
    dd('call');
});


