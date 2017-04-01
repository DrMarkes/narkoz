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

Auth::routes();

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::get('/questions/has_answer', [
    'uses' => 'QuestionController@questionsHasAnswer',
    'as' => 'questions.hasAnswer'
]);

Route::get('/questions/no_answer', [
    'uses' => 'QuestionController@questionsNoAnswer',
    'as' => 'questions.noAnswer'
]);

Route::resource('questions', 'QuestionController');

Route::get('/about', [
    'uses' => 'AboutController@index',
    'as' => 'about'
]);
