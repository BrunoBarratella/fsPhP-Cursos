<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function($year){
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos!</p>";
};

echo $myAge(2004);

$priceBrl = function ($price){
    return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?</p>";

$myCart =[];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cartAdd("HTML5", 1, 497);
$cartAdd("JQuery", 2, 500);

var_dump($myCart);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 10;

function showDates ($days){
    $showDate = [];
    for ($day = 1; $day < $days; $day++){
        $saveDate[] = date ("d/m/Y", strtotime("+{$day}Days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates($iterator) as $date){
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>"; 

function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++){
        yield  date ("d/m/Y", strtotime("+{$day}Days"));
    }
}

echo "<br></br><div style='text-align: center'>";
foreach (generatorDate(50) as $date){
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>"; 