<?php

Route::prefix('admin')->group(function () {
    Route::get('login','Auth\AuthAdminController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\AuthAdminController@login')->name('admin.login.submit');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('logout', 'Auth\AuthAdminController@logout')->name('admin.logout');
        Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
        Route::get('user/{id}', 'Admin\AdminController@edit')->name('admin.edit.user');
        Route::put('user/{id}', 'Admin\AdminController@update')->name('admin.update.user');

        Route::resource('users', 'User\UserController');
        Route::resource('admins', 'User\AdminController');
        Route::resource('not_founds', 'NotFound\NotFoundController')->only(['index','destroy']);
        Route::resource('about', 'About\AboutController');
        Route::resource('sliders', 'Slider\SliderController');
        Route::resource('testimonails', 'Testimonail\TestimonailController');
        Route::resource('galleries', 'Gallery\GalleryController');
        Route::resource('contacts', 'Contact\ContactController')->except(['store','edit','create']);
        Route::resource('faqs', 'FAQ\FAQController');
        Route::resource('dialogs', 'Dialog\DialogController');

    });

});
