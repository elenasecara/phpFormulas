<?php
/**
 * Created by PhpStorm.
 * User: Elena Secara
 * Date: 10/01/2019
 * Time: 12:03
 */

class Calculator
{
    var $r = 75, $t = 35, $m = 0.0195, $pi = 20, $deltaP = 0, $maxDeltaP = 205, $x = 0;

    public function __construct($r, $t, $m, $pi, $deltaP, $maxDeltaP, $x) {
        $this->r = $r;
        $this->t = $t;
        $this->m = $m;
        $this->pi = $pi;
        $this->deltaP = $deltaP;
        $this->maxDeltaP = $maxDeltaP;
        $this->x = $x;
    }

    public function valveOpeningArea($r, $x){
        $x = ($r / 5) + $x;
        $d = ($r - (($r * 2 - $x) / 2)) / 360;
        $e = acos($d) * 180 / Pi();
        $c = Pi() * pow($r, 2) * 2;
        $g = $r - ((2 * $r - $x) / 2);
        $h = sqrt(pow($r, 2) - pow($r - (2 * $r - $x) / 2, 2));
        $af = ($e * $c) - ($g * $h);
        return $af;
    }

    public function deltaP(){
        if (!is_numeric($deltaP)) {
            // echo "Delta P max is: ".
            $deltaP = $maxDeltaP;
            echo $deltaP;
        } else {
//            echo "Delta P is: ".
            $deltaP = $deltaP * 0.677;
            echo $deltaP;
        }
    }


}
