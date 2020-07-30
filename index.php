<?php

require_once "vendor/autoload.php";

use \Demo\HelloWorldService;

$service = new HelloWorldService();
$service->welcome();