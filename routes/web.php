<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

Route::get('/forgot_password', function () {
    return view('pages.forgot_password');
})->name('forgot_password');

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/cricket', function () {
    return view('pages.cricket');
})->name('cricket');

Route::get('/football', function () {
    return view('pages.football');
})->name('football');

Route::get('/tennis', function () {
    return view('pages.tennis');
})->name('tennis');

Route::get('/indian_card_games', function () {
    return view('pages.indian_card_games');
})->name('indian_card_games');

Route::get('/casino', function () {
    return view('pages.casino');
})->name('casino');

Route::get('/1X2_gaming', function () {
    return view('pages.1X2_gaming');
})->name('1X2_gaming');

Route::get('/ezugi', function () {
    return view('pages.ezugi');
})->name('ezugi');

Route::get('/supernova', function () {
    return view('pages.supernova');
})->name('supernova');

Route::get('/slot_casino', function () {
    return view('pages.slot_casino');
})->name('slot_casino');

// Account page 
Route::get('/deposit', function () {
    return view('accounts.deposit');
})->name('deposit'); 

Route::get('/withdraw', function () {
    return view('accounts.withdraw');
})->name('withdraw');

Route::get('/account_statement', function () {
    return view('accounts.account_statement');
})->name('account_statement');

Route::get('/open_bets', function () {
    return view('accounts.open_bets');
})->name('open_bets');

Route::get('/profit_loss_event', function () {
    return view('accounts.profit_loss_event');
})->name('profit_loss_event');

Route::get('/change_password', function () {
    return view('accounts.change_password');
})->name('change_password');

Route::get('/account_setting', function () {
    return view('accounts.account_setting');
})->name('account_setting');