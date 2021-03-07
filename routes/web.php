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
*/

Route::get('/home', function () {
    $user = auth()->user();
    if ($user && $user->user_type=='employer')
    {
        return view('employerhome', ['user'=>$user]);
    }
    return view('dashboard', ['user'=>$user]);

})->name('home');

// profile routes
Route::get('/profile',  'ProfileController@index')->name('profile.index');
Route::get('/profile/create',  'ProfileController@create')->name('profile.create');
Route::post('/profile',  'ProfileController@store')->name('profile.store');
Route::get('/profile/{profile}', 'ProfileController@show')->name('profile.show');
Route::get('/profile/{profile}/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile/{profile}', 'ProfileController@update')->name('profile.update');
Route::get('/profile/skills', 'ProfileController@createSkills')->name('profile.createSkills');
Route::post('/profile/skills/{profile}', 'ProfileController@storeSkills')->name('profile.storeSkills');
Route::get('/profile/skills/{profile}/edit', 'ProfileController@editSkills')->name('profile.editSkills');
Route::put('/profile/skills/{profile}', 'ProfileController@updateSkills')->name('profile.updateSkills');


// skills routes
Route::get('/skills',  'SkillController@index')->name('skills.index');
Route::get('/skills/create',  'SkillController@create')->name('skills.create');
Route::post('/skills',  'SkillController@store')->name('skills.store');
Route::get('/skills/{skills}', 'SkillController@show')->name('skills.show');
Route::get('/skills/{skills}/edit', 'SkillController@edit')->name('skills.edit');
Route::put('/skills/{skills}', 'SkillController@update')->name('skills.update');
Route::delete('/skills/{skills}', 'SkillController@destroy')->name('skills.destroy');

// categories routes
Route::get('/categories',  'CategoryController@index')->name('categories.index');
Route::get('/categories/create',  'CategoryController@create')->name('categories.create');
Route::post('/categories',  'CategoryController@store')->name('categories.store');
Route::get('/categories/{category}', 'CategoryController@show')->name('categories.show');
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
Route::put('/categories/{category}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy');
Route::get('/messages/{room}',  'MessageController@index')->name('messages.index');
Route::post('/messages{room}',  'MessageController@store')->name('messages.store');
Route::delete('/messages/{message}', 'RoomController@destroy')->name('messages.destroy');
Route::delete('/rooms/{room}', 'RoomController@destroy')->name('rooms.destroy');
Route::get('/rooms', 'RoomController@index')->name('rooms.index');
Route::get('/reviews',  'ReviewController@index')->name('reviews.index');
Route::get('/reviews/create',  'ReviewController@create')->name('jobs.create');
Route::post('/reviews/{pro}',  'ReviewController@store')->name('reviews.store');
Route::get('/reviews/pro/{pro}',  'ReviewController@proReviews')->name('reviews.pro');
Route::get('/reviews/{review}', 'ReviewController@show')->name('reviews.show');
Route::get('/reviews/{review}/edit', 'ReviewController@edit')->name('reviews.edit');
Route::put('/reviews/{review}', 'ReviewController@update')->name('reviews.update');
Route::delete('/reviews/{review}', 'ReviewController@destroy')->name('reviews.destroy');
Route::get('/reviews/{job}/assign/{writer}', 'ReviewController@assignJob')->name('reviews.edit');
