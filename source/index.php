<?php
include 'DataHelper.php';

echo "Test DB: ";
$dataHelper = new DataHelper();
$dbList = $dataHelper->showDatabases();
echo var_export($dbList, true), '<br/>';

echo "Test Memcached: ";
$mem = new Memcached();
$mem->addServer("nx_memcached", 11211);
$mem->add("memkey", "Good day huh?");
$memVal = $mem->get("memkey");
echo $memVal;