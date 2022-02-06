<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/users', function () {
    return view('users.index');
});

Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/roles', function () {
    return view('users.roles');
});

Route::get('/orders', function () {
    return view('orders.index');
});

Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/projects/fields', function () {
    return view('projects.fields');
});

Route::get('/projects/nature', function () {
    return view('projects.nature');
});

Route::get('/general-settings', function () {
    return view('general_settings');
});


Route::get('/get-users', function (Request $request) {
    if ($request->ajax()) {
        $users = [
            ['id' => 1, 'name' => 'emad', 'username' => 'emad_2912', 'email' => 'emad@gmail.com', 'phone' => '04543444', 'type' => 'account'],
            ['id' => 2, 'name' => 'emad', 'username' => 'emad_2912', 'email' => 'emad@gmail.com', 'phone' => '04543444', 'type' => 'account']

        ];
        return $users;
    }
});

Route::get('/get-order', function (Request $request) {
    if ($request->ajax()) {
        return [];
    }
});

