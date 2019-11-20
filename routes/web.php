<?php

Route::get('/', 'homeController@index');

Route::get('/gejala', 'gejalaController@index')->name('gejala');

Route::get('/rule', 'ruleController@index')->name('rule');
Route::get('/rule/create', 'ruleController@create')->name('rule.create');
Route::get('/rule/edit', 'ruleController@edit')->name('rule.edit');
Route::get('/rule/delete', 'ruleController@delete')->name('rule.delete');

Route::get('/penyakit', 'penyakitController@index')->name('penyakit');

Route::get('/dokter', 'dokterController@index')->name('dokter');

Route::get('/jadwal', 'jadwalController@index')->name('jadwal');
