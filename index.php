<?php

require_once './vendor/autoload.php';
require_once './Csv.php';
require_once './MyFaker.php';

// $time = microtime(true);

$csv = new Csv(new SplFileObject('test.csv', 'w'));
$header = ['name', 'tel', 'mail', 'birthday'];
$records = 10;

$csv->set_header($header)->create_header();
$csv->set_records($records)->create_test_data(new MyFaker());

// echo (microtime(true) - $time); 