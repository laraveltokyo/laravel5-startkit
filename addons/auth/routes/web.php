<?php

// Authentication Routes...
Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login');
Route::any('logout', 'LoginController@logout');

// Registration Routes...
Route::get('register', 'RegisterController@showRegistrationForm');
Route::post('register', 'RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
Route::post('password/reset', 'ResetPasswordController@reset');
