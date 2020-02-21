<?php

/*
 * Specific validation methods for data used in Italy
*/

require_once 'Validate/IT.php';
// Fiscal Code
if (Validate_IT::fiscalCode('xxx xxx 00a00 x000x'))
{
    echo 'Valid fiscal code';
} else {
    echo 'NOT valid fiscal code';
}
?>