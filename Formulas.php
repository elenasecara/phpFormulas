<?php
error_reporting(0);
//class Formulas
//{
    $R = 75;
    $T = 35;
    $M = 0.0195;
    $Pi = 20;
    $deltaP = null;
    $maxDeltaP= 205;
    $X = 0;
    $Cd = 0.9;

//    public function densityOfFluid(){
//        $result =(($deltaP * pow(10, 5) * $M)/(8.3142 * (273 + $T)));
//        echo $p;
//    }
//    if(is_numeric($x)){
//        $x = $R/5 + $x;
//    }else{
//        $x = 0;
//    }
for ($counter=0; $counter<11; $counter++) {

        $D = ($R - (($R * 2 - $X) / 2)) / 360;
        $E = acos($D) * 180 / Pi(); // to the power of -1
        $C = Pi() * pow($R, 2) * 2;
        $G = $R - ((2 * $R - $X) / 2);
        $H = sqrt(pow($R, 2) - pow($R - (2 * $R - $X) / 2, 2));
        $Af = ($E * $C) - ($G * $H).'</br>';

        if (!is_numeric($deltaP)) {
            echo "Delta P max is:     ". $deltaP = $maxDeltaP . '</br>';
        } else {
            echo "Delta P is:    ".$deltaP = $deltaP * 0.677 . '</br>';
        }
        $Pk =  $Pi + $deltaP;

//        echo "Density:   " .
            echo "p:" . $p = ($deltaP * pow(10, 5) * $M)/(8.3142 * (273 + $T * $Pi/$Pk)).'</br>';
//        echo "Density:   ".$p = ($deltaP * pow(10, 5) * $M)/(8.3142 * (273 + $T)).'</br>';


//        echo "Area Pipe ".
            $Apipe = (pi()*pow(2*$R, 2))/4 ."<br>";

//            echo $a = $Pk * $p * 1.29;
//            echo 'Qmj:'. $Qmj = $Apipe * pow(10, -6) * 0.98 * (sqrt(($Pk * $p * 1.29))) . '</br>';
//            $a = $Pk * $p * 1.29;
//            echo sqrt($a);
//                              =(D29*10^-6*0.98*                   SQRT(H29*C29*1.29))

//            echo "Qj is: ". $Qj = $Qmj / $p . '</br>';

            //Q is volumetric flow across valve
//            echo "Q: " .
                $Q = $Cd * $Af * pow(10, -6) * (sqrt((2* $deltaP)/$p)).'</br>';

            // u is fluid velocity
            echo 'u: ' .$u = $Q /( $Af * pow(10, -6) ). '</br>';
//            echo number_format($u,5,",",".");
//            echo(round($u, 5)) . '</br>';
            //c is for celerity
            if($u != 0) {
                echo "celerity: " .$c = $deltaP / ($p * $u) . '</br>';
            }else{
//                echo "celerity: " .
                    $c = 0;
            }

            // time of closure deltaT

            //if($c=0&&$u==0)
            //{
              //  $deltaT = $deltaT/2;
            //}
            //else{
                //if()
                //{
                    $deltaT = (($c*$p*$u)/205)*($R/75);
                //}
                //else
                   // $deltaT=0;
           // }
            echo 'delta T: ' . $deltaT . '</br>' ;
            $X = ($R / 5) + $X;
    }
//        $Q = $Af * $X * $u;
//        $u = $Q/($Af * pow(10, -6));


//}