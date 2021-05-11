<?php

Route::redirect('/', '/login');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions

    Route::resource('permissions', 'PermissionsController');

    // Roles

    Route::resource('roles', 'RolesController');

    // Users

    Route::resource('users', 'UsersController');

    // Rooms

    Route::resource('rooms', 'RoomsController');

    // Events

    Route::resource('events', 'EventsController');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');

    Route::get('search-room', 'BookingsController@searchRoom')->name('searchRoom');
    Route::post('book-room', 'BookingsController@bookRoom')->name('bookRoom');
});
