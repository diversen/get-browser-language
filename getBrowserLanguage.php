<?php

namespace diversen;

use Zend_Locale;

class getBrowserLanguage {
    /**
     * Method for getting browser language
     * @return array $browser e.g. array ('language' => 'en', 'language_long => 'en_GB');
     */
    public static function asArray () {
        //include_once "Zend/Locale.php";

        $zend_locale = new Zend_Locale(Zend_Locale::BROWSER);
        $browser = array();
        $browser['language'] = $zend_locale->getLanguage();
        $browser['language_long'] = $zend_locale->toString();
        return $browser;
    }
}

