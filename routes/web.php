<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ldapController;
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

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/ldap', [ldapController::class, 'index'])->name('import');;
Route::middleware(['auth:sanctum', 'verified', "authorize"])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/authorize/{token}', [
        'name' => 'Authorize Login',
        'as' => 'authorize.device',
        'uses' => 'App\Http\Controllers\Auth\AuthorizeController@verify',
    ]);

    Route::post('/authorize/resend', [
        'name' => 'Authorize',
        'as' => 'authorize.resend',
        'uses' => 'App\Http\Controllers\Auth\AuthorizeController@resend',
    ]);
});

Route::get('/mailable', function () {
    $authorize = App\Models\Authorize::find(1);

    return new App\Mail\AuthorizeDevice($authorize);
});