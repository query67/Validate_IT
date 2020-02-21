<?php

/*
 * Specific validation methods for data used in Italy
*/

require_once 'Validate/IT.php';

if (Validate_IT::mobilePhoneNumber('3330000000'))
{
    echo 'Valid mobile phone number.';
} else {
    echo 'NOT valid mobile phone number.';
}
?>