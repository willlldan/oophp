<?php

// class ContohStatic {
//     public static $angka = 1;
//     public static function halo() {
//         return "Halooo " . self::$angka++ . " kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<br>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;
    public function halo() {
        return "Haloo " . self::$angka++ . " kali. <br>";
    }
}

echo "<br>";
echo "<br>";

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();