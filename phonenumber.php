<?php

/*
 * Specific validation methods for data used in Italy
*/

require_once 'Validate/IT.php';

if (Validate_IT::phoneNumberPrefix('+39 02/00000000'))
{
    echo 'Valid phone number.';
} else {
    echo 'NOT valid phone number.';
}
?>