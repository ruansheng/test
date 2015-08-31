<?php
/**
 * 
 * @author ruansheng
 * @since  2015-08-16
 */

/**
 * Class B
 */
class B {

    private $ctx;

    public function index() {
        echo __CLASS__.':'. __FUNCTION__ .'<br/>';
        $this->ctx = new Ctx();
        echo '<pre>';
            print_r($this->ctx->a->index());
        echo '</pre>';
    }
}