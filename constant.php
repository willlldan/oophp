<?php

define('NAMA', 'Wildan Fauzi R');
echo NAMA;
echo "<br>";

const UMUR = 20;
echo UMUR;

class CobaConst {
    const NAMA = "Will";
}
echo "<br>";
echo CobaConst::NAMA;
echo "<br>";
echo __FILE__;

echo "<br>";
function coba() {
    return __FUNCTION__;
}

echo coba();
echo "<br>";
class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;