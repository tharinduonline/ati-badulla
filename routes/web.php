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
Route::get('/', ['uses' => 'FrontEndController@index','as' => 'index']);
Route::get('/about', ['uses' => 'FrontEndController@about','as' => 'about']);
Route::get('/information-technology', ['uses' => 'FrontEndController@hndit','as' => 'hndit']);
Route::get('/accountancy', ['uses' => 'FrontEndController@hnda','as' => 'hnda']);
Route::get('/management', ['uses' => 'FrontEndController@hndm','as' => 'hndm']);
Route::get('/english', ['uses' => 'FrontEndController@english','as' => 'english']);
Route::get('/tourism-and-hospitality-management', ['uses' => 'FrontEndController@hndthm','as' => 'hndthm']);

Route::get('/news', ['uses' => 'PostsController@posts','as' => 'posts']);
Route::get('/events', ['uses' => 'FrontEndController@events','as' => 'events']);
Route::get('/gallery', ['uses' => 'GalleryController@index','as' => 'gallery']);
Route::get('/album/{id}', ['uses' => 'GalleryController@index2','as' => 'album']);
Route::get('/post/{slug}', ['uses' => 'FrontEndController@singlePost','as' => 'post.single']);
Route::get('/contact-us', ['uses' => 'FrontEndController@contactus','as' => 'contact']);
Route::get('/event/{slug}', ['uses' => 'FrontEndController@singleEvent','as' => 'event.single']);
Route::get('/category/{id}', ['uses' => 'FrontEndController@category','as' => 'category.single']);
Route::get('/tag/{id}', ['uses' => 'FrontEndController@tag','as' => 'tag.single']);
Route::post('/contact/store', ['uses' => 'ContactsController@store','as' => 'contact.store']);
Route::get('/results', function(){
        $posts = \App\Post::where('title','like',  '%' . request('query') . '%')->get();

        return view('results')->with('posts', $posts)
                              ->with('title', 'Search results : ' . request('query'))
                              ->with('settings', \App\Setting::first())
                              ->with('categories', \App\Category::take(5)->get())
                              ->with('query', request('query'));
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

Route::get('/dashboard', ['uses' => 'HomeController@index','as' => 'home']);

Route::get('/contacts', ['uses' => 'ContactsController@index','as' => 'contacts']);
Route::get('/contact/delete/{id}', ['uses' => 'ContactsController@destroy','as' => 'contact.delete']);

Route::get('/post/create', ['uses' => 'PostsController@create','as' => 'post.create']);
Route::post('/post/store', ['uses' => 'PostsController@store','as' => 'post.store']);
Route::get('/posts', ['uses' => 'PostsController@index','as' => 'posts']);
Route::get('/post/delete/{id}', ['uses' => 'PostsController@destroy','as' => 'post.delete']);
Route::get('/posts/trashed', ['uses' => 'PostsController@trashed','as' => 'posts.trashed']);
Route::get('/posts/kill/{id}', ['uses' => 'PostsController@kill','as' => 'post.kill']);
Route::get('/posts/restore/{id}', ['uses' => 'PostsController@restore','as' => 'post.restore']);
Route::get('/posts/edit/{id}', ['uses' => 'PostsController@edit','as' => 'post.edit']);
Route::post('/post/update/{id}', ['uses' => 'PostsController@update','as' => 'post.update']);

Route::get('/tags', ['uses' => 'TagsController@index','as' => 'tags']);
Route::get('/tag/edit/{id}', ['uses' => 'TagsController@edit','as' => 'tag.edit']);
Route::get('/tag/create', ['uses' => 'TagsController@create','as' => 'tag.create']);
Route::post('/tag/store', ['uses' => 'TagsController@store','as' => 'tag.store']);
Route::post('/tag/update/{id}', ['uses' => 'TagsController@update','as' => 'tag.update']);
Route::get('/tag/delete/{id}', ['uses' => 'TagsController@destroy','as' => 'tag.delete']);

Route::get('/category/create', ['uses' => 'CategoriesController@create','as' => 'category.create']);
Route::get('/categories', ['uses' => 'CategoriesController@index','as' => 'categories']);
Route::post('/category/store', ['uses' => 'CategoriesController@store','as' => 'category.store']);
Route::get('/category/edit/{id}', ['uses' => 'CategoriesController@edit','as' => 'category.edit']);
Route::get('/category/delete/{id}', ['uses' => 'CategoriesController@destroy','as' => 'category.delete']);
Route::post('/category/update/{id}', ['uses' => 'CategoriesController@update','as' => 'category.update']);


Route::get('/users', ['uses' => 'UsersController@index','as' => 'users']);
Route::get('/user/create', ['uses' => 'UsersController@create','as' => 'user.create']);
Route::post('/user/store', ['uses' => 'UsersController@store','as' => 'user.store']);
Route::get('user/admin/{id}', ['uses' => 'UsersController@admin','as' => 'user.admin']);
Route::get('user/not-admin/{id}', ['uses' => 'UsersController@not_admin','as' => 'user.not.admin']);
Route::get('user/profile', ['uses' => 'ProfilesController@index','as' => 'user.profile']);
Route::get('user/delete/{id}', [ 'uses' => 'UsersController@destroy','as' => 'user.delete']);
Route::post('/user/profile/update', ['uses' => 'ProfilesController@update','as' => 'user.profile.update']);

Route::get('/settings', ['uses' => 'SettingsController@index','as' => 'settings']);
Route::post('/settings/update', ['uses' => 'SettingsController@update','as' => 'settings.update']);

Route::get('/event/create', ['uses' => 'EventsController@create','as' => 'event.create']);
Route::post('/event/store', ['uses' => 'EventsController@store','as' => 'event.store']);
Route::get('/events', ['uses' => 'EventsController@index','as' => 'events']);
Route::get('/event/delete/{id}', ['uses' => 'EventsController@destroy','as' => 'event.delete']);
Route::get('/event/trashed', ['uses' => 'EventsController@trashed','as' => 'event.trashed']);
Route::get('/event/kill/{id}', ['uses' => 'EventsController@kill','as' => 'event.kill']);
Route::get('/event/restore/{id}', ['uses' => 'EventsController@restore','as' => 'event.restore']);
Route::get('/event/edit/{id}', ['uses' => 'EventsController@edit','as' => 'event.edit']);
Route::post('/event/update/{id}', ['uses' => 'EventsController@update','as' => 'event.update']);


Route::get('gallery/list',['uses' => 'GalleryController@viewGalleryList','as' => 'gallery']);
Route::resource('gallery/save','GalleryController@saveGallery');
Route::get('gallery/view/{id}','GalleryController@viewGalleryPics');
Route::resource('image/do-upload','GalleryController@doImageUpload');
Route::get('gallery/delete/{id}', 'GalleryController@deleteGallery');
Route::get('gallery/image/delete/{id}', 'GalleryController@deleteImage');

});

