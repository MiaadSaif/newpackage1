<?php

use Acaothman\Contact\Facades\Contact;
use Illuminate\Routing\Route;

Route::get('/contact', function() {
    return view('contact::admin');
});

Route::get('/contact', function () {
    return view('contact::contact');
});
