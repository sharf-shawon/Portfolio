<?php

use App\Contact;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email|max:100',
        'phone' => 'required|string|max:20',
        'message' => 'required|string|max:500',
    ]);
    $data = new Contact();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->message = $request->message;
    $data->save();
    Mail::to($data)->bcc(setting('admin.email'))->send(new ContactFormSubmitted($data));
});
Route::get('/cv', function () {
    dd(setting('site.facebook'));
    // return dd(json_decode(setting('site.cv')));
    dd(Storage::disk(config('voyager.storage.disk'))->url(json_decode(setting("site.cv"))[0]->download_link) ?: '');
    // return setting('site.cv')->download_link;
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
