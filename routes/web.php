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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/{id}/{name}', array('as'=>'test.id.name',function ($id,$name) {
    return $id.' test '.route('test.id.name',[$id,$name],true).' '.$name;
}));




//Route::resource('posts','PostsController');


Route::get('custom/{p1}/{p2}','PostsController@custom_action');


Route::get('post/{id}/{name?}/{password?}','PostsController@show_post');



/*
 * Application Routes
 *
 * */


Route::get('/insert/{title}/{content}',function($title,$content){

    DB::insert('insert into posts  (title, content) values (?, ?) ',[$title,$content]);




});


Route::get('/update/{id}/{title}',function($id,$title){

    $updated = DB::update('update posts set title = ? where id = ?',[$title,$id]);
    return $updated;

});


Route::get('/delete/{id}',function($id){

    $deleted = DB::delete('delete from posts where id = ?',[$id]);
    return $deleted;

});



Route::get('/read/{id}','PostsController@read');