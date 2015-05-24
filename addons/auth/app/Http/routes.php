<?php 

Route::get('/home', [
	'as' => 'home',
	'middleware' => 'auth',
	'uses' => function () {
		return '';
	}
]);

Route::controllers([
	'auth' => 'AuthController',
	'password' => 'PasswordController',
]);

