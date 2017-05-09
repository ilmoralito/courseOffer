<?php

Route::get('/', 'SubscribeController@index');

Route::get('/offers', 'OfferController@index');
Route::get('/offers/{slug}', 'OfferController@show');
Route::get('/offers/{slug}/faqs', 'OfferController@faqs');
Route::get('/offers/{slug}/schedules', 'OfferController@schedules');
Route::get('/offers/{slug}/modules', 'OfferController@modules');
Route::get('/offers/{slug}/tutors', 'OfferController@tutors');

Route::get('/contact', 'ContactController@index');

