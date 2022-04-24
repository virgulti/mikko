<?php

require 'vendor/autoload.php';

use Svc\Mikko\App\Controllers\MainController;


$paymentDates = new MainController();

$success = $paymentDates->run($argv);

if ($success) {
    echo "operation successful";
}