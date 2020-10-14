<?php

use App\Contact;
use App\Mail\ContactFormSubmitted;
use App\Mail\CVDownloaded;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/blog', function () {
    return view('blog')->with(['data' => App\Post::where('active', true)->paginate(6)]);
});
Route::get('/blog/{id}', function ($id) {
    $data = App\Post::findOrFail($id);
    return redirect("/blog/{$data->id}/".Str::slug($data->title));
});
Route::get('/blog/{id}/{slug}', function ($id, $slug) {
    $data = App\Post::findOrFail($id);
    if(Str::slug($data->title) != $slug)
        abort(404);
    return view('post')->with([
        'data' => $data
    ]);
});
Route::get('/redirect/{provider}', [App\Http\Controllers\Auth\LoginController::class, 'redirect']);
Route::get('/callback/{provider}', [App\Http\Controllers\Auth\LoginController::class, 'callback']);

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

Route::get('/cv', function (Request $request) {
    $user = User::find(Auth::id());
    $user->downloaded += 1;
    $user->save();
    // Mail::to(setting('admin.email'))->send(new CVDownloaded($user));
    return response()->download(public_path(setting("site.cvFilePath")), null, ['location' => ("/contact")]);
});

Auth::routes();
Route::group(['prefix' => 'backend'], function () {
    Voyager::routes();
});
