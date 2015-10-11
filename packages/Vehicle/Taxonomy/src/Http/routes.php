<?php

Route::resource('admin/vocabulary', 'Vehicle\Taxonomy\Http\Controllers\VocabularyController');

Route::get('admin/vocabulary/{vocabulary}/confirm', 'Vehicle\Taxonomy\Http\Controllers\VocabularyController@confirm');