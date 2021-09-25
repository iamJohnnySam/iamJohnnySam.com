<?php
$request = $_SERVER['REQUEST_URI'];

$title = "Home";
$hlink = '/web_elements/homeheader.php';
$plink = '/home.php';

include 'web_elements/header.php';
require __DIR__ . $hlink;
require __DIR__ . $plink;
include 'web_elements/footer.php';