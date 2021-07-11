<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/', function () {
    return [
        'app' => 'Laravel 6 API Boilerplate',
        'version' => '1.0.0',
    ];
});




Route::prefix('v1', ['middleware' => ['cors']])->group(function () {
    Route::group(['namespace' => 'Auth'], function () {

        Route::post('auth/login', ['middleware' => ['cors'],'as' => 'login', 'uses' => 'AuthController@login']);
    
        Route::post('auth/register', ['as' => 'register', 'uses' => 'RegisterController@register']);
        // Send reset password mail
        Route::post('auth/recovery', 'ForgotPasswordController@sendPasswordResetLink');
        // handle reset password form process
        Route::post('auth/reset', 'ResetPasswordController@callResetPassword');
    
    });
    
    Route::group(['middleware' => ['jwt', 'jwt.auth']], function () {
    
        Route::group(['namespace' => 'Profile'], function () {
    
            Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@me']);
    
            Route::put('profile', ['as' => 'profile', 'uses' => 'ProfileController@update']);
    
            Route::put('profile/password', ['as' => 'profile', 'uses' => 'ProfileController@updatePassword']);
    
        });
    
        Route::group(['namespace' => 'Auth'], function () {
    
            Route::post('logout', ['as' => 'logout', 'uses' => 'LogoutController@logout']);
    
        });
    });

    Route::group([['namespace' => 'Film', 'prefix' => 'film']], function () {
        Route::get('film', ['as' => 'film', 'uses' => 'FilmController@index']);
        Route::post('film', ['as' => 'film', 'middleware' => ['admin'], 'uses' => 'FilmController@store']);
        Route::get('film/{id}', ['as' => 'film', 'uses' => 'FilmController@show']);
        Route::put('film/{id}', ['as' => 'film', 'uses' => 'FilmController@update']);
        Route::get('film/{id}/suatchieu', ['as' => 'film', 'uses' => 'SuatChieuController@showByFilmId']);
    });

    Route::group([['namespace' => 'Rap', 'prefix' => 'rap']], function () {
        Route::get('rap', ['as' => 'rap', 'uses' => 'RapController@index']);
        Route::get('rap/{id}', ['as' => 'rap', 'uses' => 'RapController@show']);
    });

    Route::group([['namespace' => 'SuatChieu', 'prefix' => 'suatchieu']], function () {
        Route::get('suatchieu', ['as' => 'suatchieu', 'uses' => 'SuatChieuController@index']);
        Route::get('suatchieu/{id}', ['as' => 'suatchieu', 'uses' => 'SuatChieuController@show']);
        Route::post('suatchieu', ['as' => 'suatchieu', 'uses' => 'SuatChieuController@store']);
        Route::get('suatchieu/{id}/ticket', ['as' => 'suatchieu', 'uses' => 'TicketController@showBySuatChieuId']);
    });

    Route::post('checkout/{suatchieu_id}', ['as' => 'checkout', 'uses' => 'TicketController@booking']);

});


    
