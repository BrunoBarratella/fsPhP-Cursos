<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.04 - Carregamento automático");

/*
 * [ autoload spl psr-4 ] Carregamento de suas classes com spl_autoload psr-4
 */
fullStackPHPClassSession("autoload spl psr-4", __LINE__);

require __DIR__ . "/autolaod.php";

// require __DIR__."/Source/Loading/User.php";
// require __DIR__."/Source/Loading/Addres.php";
// require __DIR__."/Source/Loading/Company.php";

$user = new \Source\Loading\User();
$address = new \Source\Loading\Addres();
$company = new \Source\Loading\Company();


var_dump(
    $user,
    $address,
    $company
);

/*
 * [ autoload composer psr-4 ] https://getcomposer.org/doc/00-intro.md
 */
fullStackPHPClassSession("autoload composer psr-4", __LINE__);
