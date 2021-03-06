<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */
Route::get('/services', 'ServiceController@listServices')->name('daemon.services');
Route::get('/services/pull/{service}/{file}', 'ServiceController@pull')->name('daemon.pull');
Route::get('/packs/pull/{uuid}', 'PackController@pull')->name('daemon.pack.pull');
Route::get('/packs/pull/{uuid}/hash', 'PackController@hash')->name('daemon.pack.hash');
Route::get('/details/option/{server}', 'OptionController@details')->name('daemon.option.details');
Route::get('/configure/{token}', 'ActionController@configuration')->name('daemon.configuration');

Route::post('/download', 'ActionController@authenticateDownload')->name('daemon.download');
Route::post('/install', 'ActionController@markInstall')->name('daemon.install');
