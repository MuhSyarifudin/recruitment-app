<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('skill', 'App\Http\Controllers\SkillController@index');
Route::get('job', 'App\Http\Controllers\JobController@index');
Route::post('candidate', 'App\Http\Controllers\CandidateController@save');
