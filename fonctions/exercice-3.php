<?php

function isOdd(int $nbr) : bool
{
    if($nbr % 2 === 0)
        return true;

    return false;
}

var_dump(isOdd(12));
echo "<br>";
var_dump(isOdd(29));
echo "<br>";