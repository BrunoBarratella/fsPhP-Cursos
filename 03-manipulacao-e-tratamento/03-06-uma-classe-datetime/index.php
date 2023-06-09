<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);

define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("2004-08-07");
$dateStatic = DateTime::createFromFormat(DATE_BR, "10/03/2020 12:00:00");

var_dump([
    $dateNow,
    $dateBirth,
    $dateStatic
]);

var_dump([
    $dateNow->format(DATE_BR),
    $dateNow->format("d")
]);

echo "<p>Hoje é dia {$dateNow->format("d")} do {$dateNow->format("m")} de {$dateNow->format("Y")}</p>";

$newTimeZone = new DateTimeZone("Pacific/Apia");
$newDateTime = new DateTime("now", $newTimeZone);

var_dump([
    $newTimeZone,
    $newDateTime,
    $dateNow
]);

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");
var_dump($dateInterval);

$dateTime= new DateTime("now");
$dateTime-> add($dateInterval);
$dateTime->sub($dateInterval);

var_dump($dateTime);

$birth = new DateTime("2022-08-07");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);
var_dump($birth, $diff);

if($diff->invert){
    echo "<p>Seu aniversário foi a {$diff->days} dias</p>";
}else {
    echo "<p>Faltam {$diff->days} dias para seu aniversario!</p>";
}

$dateResources = new DateTime("now");

var_dump([
    $dateResources->format(DATE_BR),
    $dateResources->sub(DateInterval::createFromDateString("10days"))
]);





/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);


$start = new DateTime("now");
$interval = new DateInterval("P2M");
$end = new DateTime("2025-01-01");

$period = new DatePeriod($start, $interval, $end);

var_dump([
    $start->format(DATE_BR),
    $interval,
    $end->format(DATE_BR)
], $period, get_class_methods($period));

echo "<h1>Sua Assinatura: </h1>";
foreach($period as $recurrences){
    echo "<p>Próximo vencimento {$recurrences->format(DATE_BR)}</p>";
}