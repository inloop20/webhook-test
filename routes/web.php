<?php

use App\Http\Controllers\GithubWebhookController;
use Illuminate\Support\Facades\Route;

Route::get('/',[GithubWebhookController::class,'home']);


