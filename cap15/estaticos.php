<?php


class Math
{
    static $PI = 3.14159;

    static function somar($x, $y)
    {
        return $x + $y;
    }

    static function arredondar($x)
    {
        return round($x);
    }

    public function imprimirPI()
    {
        echo "<p>(Math) PI = " . self::$PI . "</p>";
    }
}



echo "<p>PI = " . Math::$PI . "</p>";
echo "<p>Somar(50, 10) = " . Math::somar(50, 10) . "</p>";
echo "<p>Arredondar(1.88) = " . Math::arredondar(1.88) . "</p>";

$m = new Math();
$m->imprimirPI();
