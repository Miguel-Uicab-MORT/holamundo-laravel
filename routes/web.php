<?php

use App\Http\Livewire\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', HelloController::class)->name('home');
