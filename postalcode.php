<?php

/*
 * Specific validation methods for data used in Italy
*/

require_once 'Validate/IT.php';

if (Validate_IT::postalCode('20126'))
{
    echo 'Valid postal code (CAP).';
} else {
    echo 'NOT valid postal code (CAP).';
}
?>