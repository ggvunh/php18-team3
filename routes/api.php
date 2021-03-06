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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//

Route::get('/city', 'RegiserAPIController@loadCity');
Route::post('/district', 'RegiserAPIController@loadDistrictByCity');



	// transfer
	Route::post('/get_balance', 'TransferAPIController@getBalanceOfAccount');
	Route::post('/get_name', 'TransferAPIController@getNameOfAccount');	
	//
	Route::post('/get_transaction_info', 'TransferAPIController@getTransactionInfo');
	Route::post('/transaction', 'TransferAPIController@transaction');
