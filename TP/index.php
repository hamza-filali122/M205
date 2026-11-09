<?php

// ==========================================
// ÉTAPE 1 — Les quatre opérations
// ==========================================

function additionner(float $a, float $b): float {
    return $a + $b;
}

function soustraire(float $a, float $b): float {
    return $a - $b;
}

function multiplier(float $a, float $b): float {
    return $a * $b;
}

function diviser(float $a, float $b): float {
    if ($b == 0) {
        // Lancement de l'exception si le diviseur est 0
        throw new InvalidArgumentException("Division par zéro impossible");
    }
    return $a / $b;
}

// ==========================================
// ÉTAPE 2 — Fonctions logiques
// ==========================================

function estPair(int $n): bool {
    // L'opérateur % retourne le reste de la division. Si le reste est 0, c'est pair.
    return $n % 2 === 0;
}

function estPositif(float $n): bool {
    return $n > 0;
}

// Version personnalisée sans utiliser max()
function maximum(float $a, float $b, float $c): float {
    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }
    return $max;
}

function estPremier(int $n): bool {
    // 0 et 1 ne sont pas des nombres premiers
    if ($n < 2) {
        return false;
    }
    
    // On teste les diviseurs de 2 jusqu'à la racine carrée de n
    $limite = floor(sqrt($n));
    for ($i = 2; $i <= $limite; $i++) {
        if ($n % $i === 0) {
            return false; // Un diviseur a été trouvé, ce n'est pas premier
        }
    }
    return true;
}

// ==================================git ========it
// ÉTAPE 3 — Calculs commerciaux
// ==========================================

function calculerTTC(float $ht, float $tva = 20.0): float {
    return $ht * (1 + ($tva / 100));
}

?>