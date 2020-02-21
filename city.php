<?php

/*
 * Specific validation methods for data used in Italy
 */

require_once 'Validate/IT.php';

if (Validate_IT::city('mi'))
{
    echo 'Valid city code.';
} else {
    echo 'NOT valid city code.';
}

if (Validate_IT::cityName('milano'))
{
    echo 'Valid city name.';
} else {
    echo 'NOT valid city name.';
}
?>