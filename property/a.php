<?php
/**
 * 
 * @author ruansheng
 * @since  2015-08-16
 */

/**
 * Class A
 */
class A {

    public function __construct() {
        echo __CLASS__.':'. __FUNCTION__ .'<br/>';
    }

    public function index() {
        echo __CLASS__.':'. __FUNCTION__ .'<br/>';
    }

    public function __call($method, $argvs) {
        echo __CLASS__.':'. __FUNCTION__ .'<br/>';
    }
}