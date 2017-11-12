<?php

Route::get('/bloco', [
           'as'            => 'bloco',
	       'middleware'    => 'auth',
           'uses'          => 'BlocoController@index'
        ]);