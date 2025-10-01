<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
EJS/HBS templating Engine
Blade
*/



Route::get('/', function () {
    return view('welcome');
});

Route::prefix("page")->group(function(){

Route::get("/abc",function(){
    return '<h3>Page abc called</h3>';

});


Route::get("/contact-us",function(){
    return '<h3>Page Contact called</h3>';
    
})->name("contact");
});



Route::redirect("/page/contact","/page/contact-us",301);
Route::fallback(function(){
    return '<h3> No Page </h3>';
});

#:id - useParams- React
#:id req.params.id - Nodejs
#
// Route::get('/abc/{id?}', function ($id=null) {
//     if($id)
//     return '<h3>Welcome '. $id . '</h3>';
// else
//     return '<h3>no Value defined</h3>';


// });
// Route::get('/abc/{id?}/{id1?}', function ($id=null,$id1=null) {
//     if($id)
//     return '<h3>Welcome '. $id . '</h3>';
// else
//     return '<h3>no Value defined</h3>';


// })->whereNumber("id")->whereIn("id",[1,2,3])->whereAlpha("id1").where("id1",'[a-zA-z]+')




# Parameter routing - Dynamic Routing
#/abc/1 -> abc

#Route::view("/abc","abc");


