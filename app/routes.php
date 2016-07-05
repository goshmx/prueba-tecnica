<?php

/*Pantalla principal de la aplicación*/

Route::get('/', 'PresentacionController@inicio');

/*Implementación de servicios de API para consulta de la matriz*/

Route::post('/cubo/inicia','CuboController@inicia');
Route::post('/cubo/update','CuboController@update');
Route::post('/cubo/query','CuboController@query');

