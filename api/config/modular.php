<?php

/*
|--------------------------------------------------------------------------
| Modules config
|--------------------------------------------------------------------------
*/

$path = base_path() . '/app/Modules';

$modules = scandir(dirname(__DIR__) . '/app/Modules');
unset($modules[0]); // unset '.'
unset($modules[1]); // unset '..'

return [
    'path' => $path,
    'base_namespace' => 'App\Modules',
    'modules' => $modules
];
