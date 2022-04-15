<?php

use Illuminate\Support\Facades\Route;
use TutorTonyM\QuickForms\Http\Controllers\TtmQuickForms_ContactController;
use TutorTonyM\QuickForms\Http\Controllers\TtmQuickForms_SubscriberController;

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

Route::post('ttm-subscribe-submit', [TtmQuickForms_SubscriberController::class, 'store'])->name('ttm-subscriber.store');
Route::post('ttm-contact-submit', [TtmQuickForms_ContactController::class, 'store'])->name('ttm-contact.store');