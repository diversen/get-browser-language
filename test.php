<?php

include_once "vendor/autoload.php";

include_once "getBrowserLanguage.php";
use diversen\getBrowserLanguage;

try {
    $ary = getBrowserLanguage::asArray();
    print_r($ary);
    // Array ( [language] => en [language_long] => en_US )
} catch (Exception $e) {
    echo $e->getMessage();
}

