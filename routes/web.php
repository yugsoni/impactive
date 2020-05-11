<?php


Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/templates', function () {
    return view('templates');
});
Route::get('/pakage', function () {
    return view('pakages');
});
Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();
Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics')->name('dashboard-analytics');
Route::get('/app-chat', 'ChatAppController@chatApp');

Route::resource('/category', 'CreateCategoryController');
Route::get('/see-category', 'CreateCategoryController@view');
Route::get('/theme-create', 'ThemeUploadController@index');
Route::post('/theme-create', 'ThemeUploadController@store')->name('file.upload.post');
Route::get('/theme-view', 'ThemeUploadController@view');
Route::get('/templates', 'ThemeUploadController@mainview');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile-edit', 'ProfileController@edit_page')->name('edit.page');
Route::post('/profile-edit', 'ProfileController@edit')->name('edit.post');
Route::get('/all-users', 'UsersController@index');
Route::get('/view-user', function () {
    return view('pages/view_user');
});
Route::get('/all-users/{id}', 'UsersController@view')->name('viewuser');
Route::post('/all-users/{id}', 'UsersController@delete')->name('deleteuser');
Route::post('/see-category/{id}', 'CreateCategoryController@delete')->name('deletecategory');
Route::post('/theme-view/{id}', 'ThemeUploadController@delete')->name('deletetheme');
Route::any('/search','ViewTemplateController@search');
Route::get('/category-edit/{id}', 'CreateCategoryController@edit_page')->name('editpage');
Route::post('/category-edit/{id}', 'CreateCategoryController@edit')->name('edit.category');
Route::get('/theme-edit/{id}', 'ThemeUploadController@edit_page')->name('themeditpage');
Route::post('/theme-edit/{id}', 'ThemeUploadController@edit')->name('edit.theme');
Route::get('/theme_view/{id}', 'ViewTemplateController@page_view')->name('themeviewpage');
Route::get('/theme_demo/{id}', 'ViewTemplateController@theme_demo')->name('themedemo');
Route::get('message/{id}', 'ChatAppController@getmessage')->name('message');
Route::post('message', 'ChatAppController@sendMessage');
Route::post('/theme_view/{id}', 'ViewTemplateController@download')->name('downloadtheme');
Route::get('/queued_theme/{id}', 'QueuedThemeController@theme_confirm')->name('theme_confirm');
Route::post('/queued_theme/{id}', 'QueuedThemeController@delete')->name('deletequeuedTheme');
Route::get('/queued_theme', 'QueuedThemeController@index');

  Route::get('product', 'RazorpayController@index');
  Route::post('paysuccess', 'RazorpayController@razorPaySuccess')->name('theme_pay');
  Route::post('razor-thank-you', 'RazorpayController@thankYou');

Route::post('/login/validate', 'Auth\LoginController@validate_api');
Route::post('/contact/send', 'HomeController@send');