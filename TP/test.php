<?php
declare(strict_types=1);

require_once __DIR__ . "/fonctions.php";

$a = 12;
$b = 8;

echo "$a + $b = " . additionner($a, $b) . PHP_EOL;

echo "$a - $b = " . soustraire($a, $b) . PHP_EOL;

echo "$a * $b = " . multiplier($a, $b) . PHP_EOL;

echo "$a / $b = " . diviser($a, $b) . PHP_EOL;

// Tester la division par zéro
try {
    echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage();
}