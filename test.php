<?php

include_once "vendor/autoload.php";

include_once "getBrowserLanguage.php";
use diversen\getBrowserLanguage;

try {
    $ary = getBrowserLanguage::asArray();
    print_r($ary);
} catch (Exception $e) {
    echo $e->getMessage();
}

