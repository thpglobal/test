<?php
require __DIR__.'/vendor/autoload.php';
use Thpglobal\Page;

session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


$page=new Page;
$page->start("Hello World");
$page->end();
