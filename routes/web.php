<?php

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


Route::get('/', 'HomeControllertwo@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/service', 'ServiceController@index')->name('service');

Route::get('/gallary', 'GallaryController@index')->name('gallary');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/singlepage', 'SinglepageController@index')->name('singlepage');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/store', 'ContactController@store')->name('contact.store');


Route::group(['middleware'=>'auth'],function(){
    Route::prefix('user')->group(function () {
        Route::get('/view', 'Backend\UserController@view')->name('user.view');
        Route::get('/add', 'Backend\UserController@add')->name('user.add');
        Route::post('/store', 'Backend\UserController@store')->name('user.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('user.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('user.update');
        Route::get('/delete/{id}', 'Backend\UserController@delete')->name('user.delete');
    });
    
    Route::prefix('profile')->group(function () {
        Route::get('/view', 'Backend\ProfileController@view')->name('profile.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profile.edit');
        Route::post('/update', 'Backend\ProfileController@update')->name('profile.update');
        Route::get('/passwordview', 'Backend\ProfileController@passwordView')->name('password.view');
        Route::post('/passwordupdate', 'Backend\ProfileController@passwordUpdate')->name('update.password');
        
    });
    
    Route::prefix('logo')->group(function () {
        Route::get('/view', 'Backend\LogoController@view')->name('logo.view');
        Route::get('/add', 'Backend\LogoController@add')->name('logo.add');
        Route::post('/store', 'Backend\LogoController@store')->name('logo.store');
        Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logo.edit');
        Route::post('/update/{id}', 'Backend\LogoController@update')->name('logo.update');
        Route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logo.delete');
    });
    
    Route::prefix('header')->group(function () {
        Route::get('/view', 'Backend\HeaderController@view')->name('header.view');
        Route::get('/add', 'Backend\HeaderController@add')->name('header.add');
        Route::post('/store', 'Backend\HeaderController@store')->name('header.store');
        Route::get('/edit/{id}', 'Backend\HeaderController@edit')->name('header.edit');
        Route::post('/update/{id}', 'Backend\HeaderController@update')->name('header.update');
        Route::get('/delete/{id}', 'Backend\HeaderController@delete')->name('header.delete');
    });
    
    Route::prefix('about')->group(function () {
        Route::get('/view', 'Backend\AboutController@view')->name('about.view');
        Route::get('/add', 'Backend\AboutController@add')->name('about.add');
        Route::post('/store', 'Backend\AboutController@store')->name('about.store');
        Route::get('/edit/{id}', 'Backend\AboutController@edit')->name('about.edit');
        Route::post('/update/{id}', 'Backend\AboutController@update')->name('about.update');
        Route::get('/delete/{id}', 'Backend\AboutController@delete')->name('about.delete');
    });
    
    Route::prefix('chooseus')->group(function () {
        Route::get('/view', 'Backend\ChooseusController@view')->name('chooseus.view');
        Route::get('/add', 'Backend\ChooseusController@add')->name('chooseus.add');
        Route::post('/store', 'Backend\ChooseusController@store')->name('chooseus.store');
        Route::get('/edit/{id}', 'Backend\ChooseusController@edit')->name('chooseus.edit');
        Route::post('/update/{id}', 'Backend\ChooseusController@update')->name('chooseus.update');
        Route::get('/delete/{id}', 'Backend\ChooseusController@delete')->name('chooseus.delete');
    });
    

    Route::prefix('success')->group(function () {
        Route::get('/view', 'Backend\SuccessController@view')->name('success.view');
        Route::get('/add', 'Backend\SuccessController@add')->name('success.add');
        Route::post('/store', 'Backend\SuccessController@store')->name('success.store');
        Route::get('/edit/{id}', 'Backend\SuccessController@edit')->name('success.edit');
        Route::post('/update/{id}', 'Backend\SuccessController@update')->name('success.update');
        Route::get('/delete/{id}', 'Backend\SuccessController@delete')->name('success.delete');
    });
    
    Route::prefix('service')->group(function () {
        Route::get('/view', 'Backend\ServiceController@view')->name('service.view');
        Route::get('/add', 'Backend\ServiceController@add')->name('service.add');
        Route::post('/store', 'Backend\ServiceController@store')->name('service.store');
        Route::get('/edit/{id}', 'Backend\ServiceController@edit')->name('service.edit');
        Route::post('/update/{id}', 'Backend\ServiceController@update')->name('service.update');
        Route::get('/delete/{id}', 'Backend\ServiceController@delete')->name('service.delete');
    });
   
    Route::prefix('clients')->group(function () {
        Route::get('/view', 'Backend\ClientsController@view')->name('clients.view');
        Route::get('/add', 'Backend\ClientsController@add')->name('clients.add');
        Route::post('/store', 'Backend\ClientsController@store')->name('clients.store');
        Route::get('/edit/{id}', 'Backend\ClientsController@edit')->name('clients.edit');
        Route::post('/update/{id}', 'Backend\ClientsController@update')->name('clients.update');
        Route::get('/delete/{id}', 'Backend\ClientsController@delete')->name('clients.delete');
    });

    Route::prefix('feature')->group(function () {
        Route::get('/view', 'Backend\FeatureController@view')->name('feature.view');
        Route::get('/add', 'Backend\FeatureController@add')->name('feature.add');
        Route::post('/store', 'Backend\FeatureController@store')->name('feature.store');
        Route::get('/edit/{id}', 'Backend\FeatureController@edit')->name('feature.edit');
        Route::post('/update/{id}', 'Backend\FeatureController@update')->name('feature.update');
        Route::get('/delete/{id}', 'Backend\FeatureController@delete')->name('feature.delete');
     });
    
     Route::prefix('footer')->group(function () {
        Route::get('/view', 'Backend\FooterController@view')->name('footer.view');
        Route::get('/add', 'Backend\FooterController@add')->name('footer.add');
        Route::post('/store', 'Backend\FooterController@store')->name('footer.store');
        Route::get('/edit/{id}', 'Backend\FooterController@edit')->name('footer.edit');
        Route::post('/update/{id}', 'Backend\FooterController@update')->name('footer.update');
        Route::get('/delete/{id}', 'Backend\FooterController@delete')->name('footer.delete');
     });

     Route::prefix('address')->group(function () {
        Route::get('/view', 'Backend\AddressController@view')->name('address.view');
        Route::get('/add', 'Backend\AddressController@add')->name('address.add');
        Route::post('/store', 'Backend\AddressController@store')->name('address.store');
        Route::get('/edit/{id}', 'Backend\AddressController@edit')->name('address.edit');
        Route::post('/update/{id}', 'Backend\AddressController@update')->name('address.update');
        Route::get('/delete/{id}', 'Backend\AddressController@delete')->name('address.delete');
     });
    
     Route::prefix('contact')->group(function () {
        Route::get('/view', 'Backend\ContactController@view')->name('contact.view');
        Route::get('/delete/{id}', 'Backend\ContactController@delete')->name('contact.delete');
     });

});

    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    
    









