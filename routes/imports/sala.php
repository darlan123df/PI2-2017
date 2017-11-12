<?php

Route::get('/sala', [
           'as'            => 'sala',
	       'middleware'    => 'auth',
           'uses'          => 'SalaController@index'
        ]);