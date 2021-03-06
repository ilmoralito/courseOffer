<?php

Route::get('/', 'HomeController@index');

Route::get('/companies', 'CompanyController@index');

Route::get('/trends', 'TrendController@index');

Route::get('/subscribe', 'SubscribeController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/offers/{headquarter?}', 'OfferController@index');
Route::get('/offers/{headquarter}/{slug}', 'OfferController@show');
Route::get('/offers/{headquarter}/{slug}/faqs', 'OfferController@faqs');
Route::get('/offers/{headquarter}/{slug}/schedules', 'OfferController@schedules');
Route::get('/offers/{headquarter}/{slug}/tutors', 'OfferController@tutors');
