<?php

Route::get('/', 'PagesController@inicio');

Route::view('galeria', 'fotos', ['numero'=> 125]);

Route::get('fotos', 'PagesController@fotos')->name('fotos');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');

Route::get('practica', 'PagesController@practica')->name('practica');

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('inicio/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('practica/{id}', 'PagesController@carros')->name('notas.carros');

Route::post('/', 'PagesController@crear')->name('notas.crear');

Route::get('editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::put('/editar/{id}', 'PagesController@update')->name('notas.update');

Route::delete('eliminar/{id}', 'PagesController@eliminar')->name('notas.eliminar');

Route::get('practica/edita/{id}', 'PagesController@editaCarros')->name('notas.editaCarros');

Route::put('/practica/edita/{id}', 'PagesController@updateCarros')->name('notas.updateCarros');
