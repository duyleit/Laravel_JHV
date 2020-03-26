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

Route::get('gm',function (){
    return view('master');
});

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/finder/index','FinderController@index');


Route::POST('/system/ChkLgn',[
    'as' => 'system.ChkLgn',
    'uses' => 'SystemController@ChkLgn'
    ]);
Route::get('/system/login','SystemController@login');
Route::get('/system/login',[
    'as' => 'system.login',
    'uses' => 'SystemController@login'
]);

//Route::get('/system/logout','SystemController@logout');
Route::get('/system/logout',[
    'as' => 'system.logout',
    'uses' => 'SystemController@logout'
]);

Route::get('/system/profile',[
    'as' => 'system.profile',
    'uses' => 'SystemController@profile'
]);

Route::get('/user/search',[
    'as' => 'user.search',
    'uses'  => 'UserController@search'
]);

//Route::get('/user/{id}/edit',function (){
//    return view('user.edit');
//});

//Route::get('/user/new',function (){
//    return view('user.add');
//});

Route::get('/user/{id}/edit','UserController@edit');
Route::POST('/user/update',[
    'as' => 'user.update',
    'uses' => 'UserController@update'
]);

Route::get('/user','UserController@index');
Route::POST('/user/show',[
    'as' => 'user.show',
    'uses' => 'UserController@show'
]);

Route::get('/user/new','UserController@create');
Route::POST('/user',[
    'as' => 'user.store',
    'uses' => 'UserController@store'
]);
Route::get('/user/destroy/{id}','UserController@destroy');

//Route::get('/user/{id}/edit','UserController@edit');

Route::group(['prefix' => 'posts','middleware' => 'adminLogin'],function (){

    Route::get('','PostsController@index');
    Route::get('',[
       'as'  => 'posts.index',
       'uses' => 'PostsController@index'
    ]);

    Route::post('/advanceSearch',[
        'as' => 'posts.advanceSearch',
        'uses'    => 'PostsController@advanceSearch',
    ]);

    Route::get('/search',[
        'as' => 'Posts.search',
        'uses' => 'PostsController@search'
    ]);

    Route::get('/add','PostsController@add')->name('add');
    Route::POST('/posts',[
        'as'=>'posts.store',
        'uses' => 'PostsController@store'
    ]);

    Route::get('/{id}/edit','PostsController@edit');
    Route::POST('/posts/{id}/update',[
        'as' => 'posts.update',
        'uses' => 'PostsController@update'
    ]);

    Route::get('/destroy/{id}','PostsController@destroy');

});




//Route::get('/food_order/search', function () {
//    return view('FoodOrder.seach');
//});



//Route::get('/posts/add',[
//    'as'=>'Posts.add',
//    'uses' => 'PostsController@add'
//]);


//Route::post('/posts/{id}/update','PostsController@update');


Route::get('/food_order/search',[
//    'as' => 'foodorder.search',
    'uses' => 'FoodOrderController@search'
]);

Route::get('/food_order/add',function (){
    return view('foodorder.add');
});
Route::post('/food_order/add',[
    'as' => 'food_order.add',
    'uses' =>'FoodOrderController@add'

]);
Route::get('/food_order/destroy/{id}',[
    'as' => 'food_order.destroy',
    'uses'  => 'FoodOrderController@destroy'
]);

Route::get('/food_order/{id}',[
    'as'=>'foodorder.show',
    'uses' => 'FoodOrderController@show'
]);

Route::put('/food_order/{id}',[
    'as'=>'foodorder.update',
    'uses' => 'FoodOrderController@update'
]);

Route::get('/food_order/{id}/edit',[
    'as'=>'foodorder.edit',
    'uses' => 'FoodOrderController@edit'
]);

//Route::get('/food_order/edit/{id}',function(){
//    return view('FoodOrder.edit');
//});

//Route::get('login',function (){
//return view('authen');
//});

//Route::post('/food_order/System/Auth','SystemController@Auth');

//Route::get('F','');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//
//Route::get('/setCookie','SystemController@setCookie');
//Route::get('/getCookie','SystemController@getCookie');