<?php

use think\facade\Route;

Route::miss(function() {
    return '404 Not Found!';
});