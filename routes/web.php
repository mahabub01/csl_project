<?php
/*Auth::routes();*/


Route::get('admin/login','Auth\adminLoginController@adminLogin')->name('admin.login');

Route::post('admin/login','Auth\adminLoginController@adminLoginSubmit')->name('admin.login.submit');

Route::get('admin/dashboard','adminController@dashboard')->name('admin.dashboard');

Route::get('admin/logout','adminController@adminLogout')->name('admin.logout');


Route::get('login','Auth\adminLoginController@adminLogin')->name('login');



