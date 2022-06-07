<?php
Route::group(['prefix' => 'api/v1'], function()
{
    \Illuminate\Routing\Route::resource('meeting','MeetingController',[
        'except' => ['edit','create']
    ]);

    \Illuminate\Routing\Route::resource('meeting/registration','RegistrationController',[
        'only' => ['store','destroy']
    ]);

    \Illuminate\Routing\Route::post('user',[
        'uses' => ['AuthController@store']
    ]);

    \Illuminate\Routing\Route::post('user/signin',[
        'uses' => ['AuthController@signin']
    ]);
});

