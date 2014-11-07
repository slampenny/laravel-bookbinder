<?php

Route::get('publish/epub', 'EpubController@create');
Route::get('publish/mobi', 'MobiController@create');
Route::get('publish/pdf', 'PdfController@create');