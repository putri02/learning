<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//GET
// -------------------------------------------basic routing------------------------------------------------
Route::get('/hello-world/{nama}', function ($nama) {
    return 'Hello' . $nama;
});

//routing, required parameters
Route::get('user/{id}', function ($id) {
    return 'pengguna ' . $id;
});

Route::get('posts/comments/{post}/{comment}', function ($postId, $commentId) {
    return 'aku' . $postId . 'kamu=' . $commentId;
});

//optional parameters
Route::get('nama/{name?}', function ($name = 'Putri') {
    return $name;
});

// POST
Route::post('foo/bar', function () {
    return 'Holla';
});

// MATCH
Route::match(['get', 'post'], 'get-post', function () {
    return 'assalamualaikum';
});

//--------------------------------------------named route----------------------------------
Route::get('usr/profile', ['as' => 'profile', function () {
    return 'heloo holaa';
}]);

Route::get('profile', function () {
    return redirect()->route('profile');
});

//----------------------------------------name route group-----------------------------------------
Route::group(['as' => 'admin::'], function () {
    Route::group(['as' => 'cabang::'], function () {
        Route::get('dashboard', ['as' => 'dashboard', function () {
            return "admin::cabang::dashboard";
        }]);
    });
});

Route::get('get-dashboard', function () {
    return redirect()->route('admin::cabang::dashboard');
});

//----------------------------------------------route controller------------------------------------
//Route::get('get-token',['uses'=>'\App\Http\Controllers\Admin\DashboardController@index']);

//----------------------------------------------route namespace-------------------------------------
Route::group(['namespace' => 'Admin'], function () {
    Route::get('get-token', ['uses' => 'DashboardController@index']);
    Route::post('get-request', ['uses' => 'DashboardController@index']);

});

Route::group(['namespace' => 'Guest'], function () {
    Route::get('get-token-guest', ['uses' => 'DashboardController@index']);

});

//----------------------------------------------route prefix----------------------------------------
Route::group(['prefix' => 'api/v1/admin', 'namespace' => 'Admin'], function () {
    Route::get('get-token', ['uses' => 'DashboardController@index']);

});

Route::group(['prefix' => 'api/v1/guest', 'namespace' => 'Guest'], function () {
    Route::get('get-token-guest', ['uses' => 'DashboardController@index']);

});

Route::get('get-response', function () {
    $arr = ['Putri','setyo'];
    return response($arr,200);
});

//---------------------------------------------view-----------------------------------------------------
Route::get('view', function ()    {
    return view('greeting', ['name' => 'James']);
});

Route::get('view1', function () {
    return view('admin.profile', ['data' => 'Putri']);
});

Route::get('view2', function () {
    return view('greeting', ['name' => 'Victoria']);
});

// Display a form to create a blog post...
Route::get('post.create', 'PostController@create');

// Store a new blog post...
Route::post('post', 'PostController@store');