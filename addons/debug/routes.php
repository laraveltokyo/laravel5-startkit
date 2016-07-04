<?php

Route::get('', 'DebugController@index');

Route::get('info', function () {
    phpinfo();
});
