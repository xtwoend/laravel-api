<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// OAuth2 Routes
// -----------------------------------------------------------------------------
Route::post('authorizations', function() {
    return \Sule\Api\Facades\AuthorizationFacade::performAccessTokenFlow();
});
// -----------------------------------------------------------------------------
// END OAuth2 Routes
