<?php
require 'vendor/autoload.php';

use SepRefund\Decimal;

$dec = new Decimal(21312.123);
echo $dec->__toString();