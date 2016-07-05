<?php

/*Pantalla principal de la aplicación*/

Route::get('/', 'PresentacionController@inicio');

/*Implementación de servicios de API para consulta de la matriz*/

Route::post('/inicia','CuboController@inicia');
Route::post('/update','CuboController@update');
Route::post('/query','CuboController@query');

