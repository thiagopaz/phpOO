<?php 
declare(strict_types=1); // vai fazer com que nao funcione no php7. Leva ao pé da letra.
function somar(int $a , int $b)
{
    return $a + $b ;
}
$numberone = "10";
print somar($numberone , 10);

// isso funciona no php 5 e não no 7
// this function in php and not in 7