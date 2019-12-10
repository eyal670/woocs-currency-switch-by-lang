<?php
/*
Plugin Name: Divine Woocs Auto Currency Switcher by Lang
Description: Auto switch the currency based on the current language
Author: Eyal670
Developer: Eyal Ron
version: 1.0
License: MIT
@create date 2019-12-10 09:41:59
@modify date 2019-12-10 10:55:04
*/

add_filter('wp_head', function() {
    $lang = get_locale();
    console_log('lang: '.$lang); //output current page language code to js console
    global $WOOCS;
    //add cases as needed
    switch ($lang)
    {
        case 'en_US':
            $WOOCS->set_currency('USD');
            break;
        default:
            $WOOCS->set_currency('ILS');
            break;
    }
});

/* output data to js console */
function console_log($x){
    $html = '<script>';
    $html .= 'console.log(\'php output - '.$x.'\');';
    $html .= '</script>';
    echo $html;
}