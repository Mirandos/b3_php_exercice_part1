<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
class Math{
    public static function add($num1,$num2):float{
        return $num1+$num2;
    }

    public static function subtract($num1,$num2):float{
        return $num1-$num2;
    }

    public static function multiply($num1,$num2):float{
        return $num1*$num2;
    }
}

echo Math::add(3,3);
echo "<br>";
echo Math::subtract(3,3);
echo "<br>";
echo Math::multiply(3,3);