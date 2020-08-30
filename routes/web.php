<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomersController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('customers', 'CustomersController')->only('index', 'create', 'store','show');
Route::get('customers/mail-resend/{id}', [CustomersController::class, 'mailResend'])->name('customers.mail-resend');
Route::get('customers/document/{id}', [CustomersController::class, 'downloadDocument'])->name('customers.document');

Route::get('/customer-doc/{reference}', function (Request $request) {
    if (!$request->hasValidSignature()) {
        abort(401);
    }
    return view('customer-doc.edit',['ref_id'=>$request->reference]);
})->name('customer-doc');

Route::post('/customer-doc/upload/{id}', 'CustomerDocumentsController@update')->name('customer-doc.upload');
