<?php

Route::get('hw', function()
{
	echo "Hello World!";
});

Route::get('greet', 'JiyaAli\HelloWorld\HelloWorldController@greet');

Route::get('db-greet', 'JiyaAli\HelloWorld\HelloWorldController@dbGreet');

?>