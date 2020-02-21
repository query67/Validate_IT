<?php

/*
 * Specific validation methods for data used in Italy
*/

require_once 'Validate/IT.php';

if (Validate_IT::region('lom'))
{
    echo 'Valid region code.';
} else {
    echo 'NOT valid region code.';
}

if (Validate_IT::regionName('lombardia'))
{
    echo 'Valid region name.';
} else {
    echo 'NOT valid region name.';
}
?>