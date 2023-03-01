<?php
$num = 407;
echo "the given umber is:$num<br>";
$total = 0;
$x=$num;
while ( $x != 0 )
{
$rem = $x % 10;
$total = $total + $rem*$rem*$rem;
$x = $x/10;
}
if ( $num == $total )
{
echo "the given number is armstrong<br>";
}
else
{
echo "the given number is not armstrong<br>";
}
?>