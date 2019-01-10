<?php
/**
 * Created by PhpStorm.
 * User: sgb384
 * Date: 09/01/2019
 * Time: 12:30
 */
$R = 75;
$DeltaP=205;
$T= 35;
$M = 0.0195;
$Pi = 20;
$X = 0;
function valve_openning_area_Af()
{


}

for ($counter=0; $counter<10 ;$counter++) {
    echo $X = ($R/5)+$X;
    $D = ($R-(($R*2-$X)/2))/360;
    $E = acos($D)*180/Pi(); // to the power of -1
    $C = Pi()*pow($R,2)*2 ;
    //echo $E*$C;
    $G = $R-((2*$R-$X)/2);
    $H = sqrt(pow($R,2)-pow($R-(2*$R-$X)/2,2));
    echo "Result   :". $result = ($E*$C)-($G*$H);
}
