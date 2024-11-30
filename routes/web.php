<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('boat', \App\Livewire\Boat::class)->name('boat.create');
