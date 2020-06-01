<?php


class math
{
    public static function Division($a, $b){
        if(isset($_POST['a'])) $a = $_POST['a'];
        if(isset($_POST['b'])) $b = $_POST['b'];
        $c = $a / $b;
        echo 'Результат деления: ' . $c;
    }
    public static function Sqrt($d){
        if(isset($_POST['d'])) $d = $_POST['d'];
        $s = sqrt($d);
        echo  'Результат извлечения корня: ' . $s;
    }
}