<?php

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



Route::get('/sendemail', 'HomeController@index');
Route::post('/sendemail/send', 'HomeController@send');



Route::resource('checkout', 'OrderController');
Route::post('paypal', 'OrderController@paypal')->name('checkout.paypal');
Route::get('returnPaypal', 'OrderController@returnPaypal')->name('process.paypal');
Route::get('cancelPaypal', 'OrderController@cancelPaypal')->name('cancel.paypal');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as' => 'blog.', 'prefix' => 'blog'], function () {
	Route::get('/', 'ProductController@show')->name('all');
	Route::get('/{product}', 'HomeController@signleblog')->name('single');
	Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('addToCart');
});

Route::group(['as' => 'cart.', 'prefix' => 'cart'], function () {
	Route::get('/', 'ProductController@cart')->name('all');
	Route::post('/remove/{product}', 'ProductController@removeProduct')->name('remove');
	Route::post('/update/{product}', 'ProductController@updateProduct')->name('update');
});

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@dashboard');
	Route::get('postview','AdminController@commentlisting')->name('postview');
	Route::get('edit/{id}','AdminController@edit');
	Route::post('edit/{id}','AdminController@update');


	Route::get('contact','AdminController@contactlisting')->name('contact');
	Route::get('category/{category}/remove', 'CategoryController@remove')->name('category.remove');
	Route::get('category/trash', 'CategoryController@trash')->name('category.trash');
	Route::get('category/recover/{id}', 'CategoryController@recoverCat')->name('category.recover');
	Route::get('product/{product}/remove', 'ProductController@remove')->name('product.remove');
	Route::get('product/trash', 'ProductController@trash')->name('product.trash');
	Route::get('product/recover/{id}', 'ProductController@recoverProduct')->name('product.recover');

	Route::view('product/extras', 'admin.partials.extras')->name('product.extras');

	Route::get('profile/{profile}/remove', 'ProfileController@remove')->name('profile.remove');
	Route::get('profile/trash', 'ProfileController@trash')->name('profile.trash');
	Route::get('profile/recover/{id}', 'ProfileController@recoverProduct')->name('profile.recover');
	Route::view('profile/roles', 'admin.partials.extras')->name('profile.extras');

	Route::get('profile/states/{id?}', 'ProfileController@getStates')->name('profile.states');
	Route::get('profile/cities/{id?}', 'ProfileController@getCities')->name('profile.cities');

	Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::resource('product', 'ProductController');
	Route::resource('category', 'CategoryController');
	Route::resource('profile', 'ProfileController');
});
Route::get('bydate', function(){
	return \App\User::where('created_at','=', '2019-03-22 12:50:23')->get();
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('blog','HomeController@blog')->name('blog');
Route::post('blog','HomeController@store')->name('blog');

Route::get('approve_comments','HomeController@approve_comments')->name('approve_comments');
Route::get('our-clinic','HomeController@ourclinic')->name('our-clinic');
Route::get('how-it-works','HomeController@howitwork')->name('how-it-works');
Route::get('what-are-emotional-support-animal-laws/','HomeController@myesalaw')->name('what-are-emotional-support-animal-laws');


Route::get('alaska-airlines-esa-pet-policy','HomeController@alaska')->name('alaska-airlines-esa-pet-policy');
Route::get('how-to-get-esa-letter','HomeController@guide')->name('how-to-get-esa-letter');
Route::get('how-to-fly-united-airlines-with-an-emotional-support-animal-letter','HomeController@united')->name('how-to-fly-united-airlines-with-an-emotional-support-animal-letter');
Route::get('american-airlines-emotional-support-animal','HomeController@american')->name('american-airlines-emotional-support-animal');
Route::get('delta-airlines-emotional-support-animal','HomeController@delta')->name('delta-airlines-emotional-support-animal');
Route::get('southwest-airlines-esa-pet-policy','HomeController@southwest')->name('southwest-airlines-esa-pet-policy');
Route::get('jetblue-emotional-support-animal-policy','HomeController@jetblue')->name('jetblue-emotional-support-animal-policy');

Route::get('esa-vs-service-animal','HomeController@esa_vs_service_animal')->name('esa-vs-service-animal');
Route::get('how-to-register-an-emotional-support-cat','HomeController@emotional_support_cat')->name('how-to-register-an-emotional-support-cat');
Route::get('how-to-register-an-emotional-support-dog','HomeController@emotional_support_dog')->name('how-to-register-an-emotional-support-dog');

Route::get('how-to-fly-with-a-dog','HomeController@fly_with_dog')->name('how-to-fly-with-a-dog');
Route::get('esa-laws-california','HomeController@esa_laws_california')->name('esa-laws-california');
Route::get('how-to-certify-an-emotional-support-dog','HomeController@certify_emotional_support_dog')->name('how-to-certify-an-emotional-support-dog');

Route::get('emotional-support-animal-for-fair-housing-act','HomeController@fair_housing_act')->name('emotional-support-animal-for-fair-housing-act');
Route::get('emotional-support-dog-vest','HomeController@emotional_support_dog_vest')->name('emotional-support-dog-vest');
Route::get('best-emotional-support-dog-breeds','HomeController@best_emotional_support_dog_breeds')->name('best-emotional-support-dog-breeds');

