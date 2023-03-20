<?php

spl_autoload_register(function ($class){

$prefix = "Source\\";
$baseDir = __DIR__."/";
$len = strlen($prefix);

if(strncmp($prefix,$class, $len) !==0){
    return;
}

$relativeClass = substr($class, $len);
$file = $baseDir.$prefix. str_replace("\\", "/", $relativeClass) . ".php";

if(file_exists($file)){
    require $file;
}
});


// Chat GPT VV
// spl_autoload_register(function($class) {
//     $classPath = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
//     if (file_exists($classPath)) {
//         require_once $classPath;
//         return true;
//     }
//     return false;
// });
