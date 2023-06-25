<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $customers = Customer::all();

    return view('welcome')->with(
        ['customers' => $customers]
    );
});

Route::get('/{pathMatch}', function () {
    return view('welcome');
})->where('pathMatch', '.*');
