<?php
	Route::get('/', 'Site\ControllerSite@index');
	Route::get('/timezone/br/{estado}/{id}', 'Site\ControllerSite@timezone')->where(['estado' => '[A-Za-z]+', 'id' => '[0-9]+']);