<?php

Route::get('/rota', [
           'as'            => 'rota',
	       'middleware'    => 'auth',
           'uses'          => 'RotaController@index'
        ]);