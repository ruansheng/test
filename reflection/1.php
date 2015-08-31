<?php
/**
 * 
 * @author ruansheng
 * @since  2015-08-16
 */

function d($var) {
    echo '<pre>';
        print_r($var);
    echo '</pre>';
}

class C {
    public $i;
    private $j;
    protected $k;
    public function __construct() {

    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function show() {
        echo 'show';
    }
}

$reflection = new ReflectionClass('C');
$methods = $reflection->getMethods();
d($methods);

$propertys = $reflection->getProperties();
d($propertys);

$instence = $reflection->newInstance();
d($instence->show());

$method = $reflection->getMethod('show');
$method->invoke($instence);
