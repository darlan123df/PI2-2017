<?php

Route::get('/campus', [
           'as'            => 'campus',
	       'middleware'    => 'auth',
           'uses'          => 'CampusController@index'
        ]);
