<?php

// BEGIN
function convertString($string)
{
    return $string[0] === strtoupper($string[0]) ? $string : strrev($string);
}
// END
