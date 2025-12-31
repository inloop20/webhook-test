<?php 
use App\Http\Controllers\GithubWebhookController;
use Illuminate\Support\Facades\Route;

Route::post('/webhook/github', [GithubWebhookController::class, 'handle']);

Route::get('/', [GithubWebhookController::class, 'home'])->name('dashboard');
