<?php

use Illuminate\Support\Facades\Route;

Route::get('/chi-siamo', function () {
    return 'Pagina Chi Siamo';
});

Route::get('/contatti', function () {
    return 'Pagina Contatti';
});

Route::get('/storia', function () {
    return 'Pagina Storia';
});