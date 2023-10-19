<?php

spl_autoload_register(function($className){
    echo 'auto loaded class' . $className . PHP_EOL;
    include dirname(__FILE__) . '/' . str_replace('\\', '/', $className) . '.php';
});