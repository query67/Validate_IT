<?php

/*
 * Specific validation methods for data used in Italy
*/

require_once 'Validate/IT.php';

if (Validate_IT::driverLicense('XX00000000X'))
{
    echo 'Valid driver license.';
} else {
    echo 'NOT valid driver license.';
}
?>