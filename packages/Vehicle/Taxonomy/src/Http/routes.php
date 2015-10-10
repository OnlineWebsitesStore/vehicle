<?php

Route::get('taxonomy/list', 'Vehicle\Taxonomy\Http\Controllers\VocabularyController@getIndex');

Route::get('admin/taxonomy', 'Vehicle\Taxonomy\Http\Controllers\VocabularyController@index');