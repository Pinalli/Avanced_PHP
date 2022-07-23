<?php

require_once "../vendor/autoload.php";

use Betop\AvancedPhp\Search;

$search =new Search();

print_r($search->getAddressFromZipCode('03624010'));