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
    return view('home');
});

//Afficher le formulaire d'authentification
Route::get('/getLogin', 'VisiteurController@getLogin');

//Authentification le visiteur à partir du login et mdp saisis
Route::get('/getLogin', 'VisiteurController@signIn');

//Déloguer le visiteur
Route::get('/getLogin', 'VisiteurController@signOut');
