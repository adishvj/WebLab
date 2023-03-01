<?php
function cal( $a , $b )
{
$i = $a;
$j = $b;
function largest( $i , $j)
{
if ( $i > $j){
echo "$i is largest number<br>";
}
else{
}
echo "$j is largest number<br>";
}
$retval =[ "largest" => largest($a,$b)];
return $retval;
}
$x = 10;
echo "$x<br>";
$y = 15;
echo "$y<br>";
cal($x , $y);
?>