<?php

Route::get('/grade', [
           'as'            => 'grade',
	       'middleware'    => 'auth',
           'uses'          => 'GradeController@index'
        ]);