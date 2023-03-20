<?php

use App\Template;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/classes/App/Template.php";
require __DIR__."/classes/Web/Template.php";

$appTemplate= new App\Template();
$webTemplate= new Web\Template();

var_dump($appTemplate, $webTemplate);

use App\Template as AppTemplate;
use Web\Template as WebTemplate;

$appUserTemplate = new AppTemplate();
$webUserTemplate = new WebTemplate();

var_dump(
    $appUserTemplate,
    $webUserTemplate
);


/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/classes/Source/Qualifield/User.php";

$user =  new \Source\Qualifield\User();

// $user->firstName = "Bruno";
// $user->lastName = "Barratella";

// $user->setFirstName("Bruno");
// $user->setLastName("Barratella");

var_dump($user, get_class_methods($user));

echo "<p>o e-mail de {$user->getFirstname()} é {$user->getEmail()}!</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$bruno=$user->setUser(
    "Bruno",
    "Barratella",
    "Cursos"
);
if(!$bruno){
    echo "<p class='trigger error'>{$user->getError()}</p>";
}



$kaue = new \Source\Qualifield\User();
$kaue -> setUser(
    "Kaue",
    "Carodoso",
    "Cursos Upiinside",
);

$gah = new \Source\Qualifield\User();
$gah->setUser(
    "Gah",
    "Morandi",
    "cursos@upinside.com.br"
); 

var_dump(
    $user, $kaue, $gah
);
