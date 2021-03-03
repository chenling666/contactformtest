<?php
/*Route::get('contact', function () {
    //return 'Hello from the contact form package';
    return view('contactform::contact');
});

Route::post('contact', function () {
    //logic goes here
    return '你好';
})->name('contact');*/

Route::group(['namespace' => 'Chenl\Contactform\Http\controllers', 'middleware' => ['web']], function (){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
