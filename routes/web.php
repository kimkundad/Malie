<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewConController;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\OrderController;

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

Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::post('/api/add_subscribe', [App\Http\Controllers\HomeController::class, 'add_subscribe']);


Route::post('/api/add_contact', [App\Http\Controllers\HomeController::class, 'add_contact']);

Route::get('/images/{file}', function ($file) {
	$url = Storage::disk('do_spaces')->temporaryUrl(
	  $file,
	  date('Y-m-d H:i:s', strtotime("+5 min"))
	);
	if ($url) {
	   return Redirect::to($url);
	}
	return abort(404);
  })->where('file', '.+');

Route::get('/about', function () {
    return view('about');
});

Route::get('/room', [App\Http\Controllers\HomeController::class, 'room']);

Route::get('/reservation', [App\Http\Controllers\HomeController::class, 'reservation']);


Route::get('/term_condition', function () {
    return view('term_condition');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::post('/api/add_myorders', [App\Http\Controllers\HomeController::class, 'add_myorders']);

Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery']);
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog']);
Route::get('/blog_detail/{id}', [App\Http\Controllers\HomeController::class, 'blog_detail']);
Route::get('/check_out', [App\Http\Controllers\HomeController::class, 'check_out']);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['UserRole:superadmin|admin']], function() {


    Route::get('/admin/subscribe', [App\Http\Controllers\SubscribeController::class, 'index']);
    Route::get('api/del_subscribe/{id}', [App\Http\Controllers\SubscribeController::class, 'del_subscribe']);

    Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::resource('/admin/category', CategoryController::class);
    Route::post('/api/api_post_status_category', [App\Http\Controllers\CategoryController::class, 'api_post_status_category']);
    Route::get('api/del_cat/{id}', [App\Http\Controllers\CategoryController::class, 'del_cat']);

    Route::resource('/admin/gallery', GalleryController::class);
    Route::post('/api/api_post_status_gallery', [App\Http\Controllers\GalleryController::class, 'api_post_status_gallery']);
    Route::get('api/del_gallery/{id}', [App\Http\Controllers\GalleryController::class, 'del_gallery']);

    Route::resource('/admin/review', ReviewController::class);
    Route::post('/api/api_post_status_review', [App\Http\Controllers\ReviewController::class, 'api_post_status_review']);
    Route::get('api/del_review/{id}', [App\Http\Controllers\ReviewController::class, 'del_review']);

    Route::resource('/admin/order', OrderController::class);
    Route::post('/api/api_post_status_order', [App\Http\Controllers\OrderController::class, 'api_post_status_order']);
    Route::get('api/del_order/{id}', [App\Http\Controllers\OrderController::class, 'del_order']);

    Route::resource('/admin/MyUser', MyUserController::class);
    Route::post('/api/api_post_status_MyUser', [App\Http\Controllers\MyUserController::class, 'api_post_status_MyUser']);
    Route::get('api/del_MyUser/{id}', [App\Http\Controllers\MyUserController::class, 'del_MyUser']);

    Route::resource('/admin/slide_show', SlideController::class);
    Route::post('/api/api_post_status_slide', [App\Http\Controllers\SlideController::class, 'api_post_status_slide']);
    Route::get('api/del_slide/{id}', [App\Http\Controllers\SlideController::class, 'del_slide']);

    Route::get('admin/setting/', [App\Http\Controllers\SettingController::class, 'index']);
    Route::post('api/post_setting/', [App\Http\Controllers\SettingController::class, 'post_setting']);

    Route::resource('/admin/news', NewConController::class);
    Route::post('/api/api_post_status_news', [App\Http\Controllers\NewConController::class, 'api_post_status_news']);
    Route::get('api/del_news/{id}', [App\Http\Controllers\NewConController::class, 'del_news']);

    Route::post('api/upload_img', [NewConController::class, 'upload_img']);

    Route::get('admin/contact/', [App\Http\Controllers\ContactController::class, 'index']);
    Route::post('/api/api_post_status_contact', [App\Http\Controllers\ContactController::class, 'api_post_status_contact']);

});
