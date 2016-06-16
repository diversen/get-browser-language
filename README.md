# 

get-browser-language

Uses zend locale to get browser language

Install: 

    composer require diversen/get-browser-language

Usage: 

~~~php
use diversen\getBrowserLanguage;

try {
    $ary = getBrowserLanguage::asArray();
    print_r($ary);
} catch (Exception $e) {
    echo $e->getMessage();
}

~~~



