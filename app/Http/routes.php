<?php
use SundaySim\Http\Requests\Request;

Route::controller('auth/password', 'Auth\PasswordController', [
	'getEmail' => 'auth.passowrd.email',
	'getReset' => 'auth.password.reset'
]);

Route::controller('auth', 'Auth\AuthController', [
	'getLogin' => 'auth.login',
	'getLogout' => 'auth.logout'
]);

Route::get('backend/users/{users}/confirm', ['as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);
Route::resource('backend/users', 'Backend\UsersController');

Route::get('backend/pages/{pages}/confirm', ['as' => 'backend.pages.confirm', 'uses' => 'Backend\PagesController@confirm']);
Route::resource('backend/pages', 'Backend\PagesController', ['except' => 'show']);

Route::get('backend/blog/{blog}/confirm', ['as' => 'backend.blog.confirm', 'uses' => 'Backend\BlogController@confirm']);
Route::resource('backend/blog', 'Backend\BlogController');

Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);

Route::get('/', function () {
	dd($this->route('users'));
    // return view('welcome');
});
