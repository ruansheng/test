<?php
/**
 * 
 * @author ruansheng
 * @since  2015-08-16
 */

/**
 * Class Mpf_Ctx
 * @property A $a
 */
class Ctx {
    protected $ctx;
    protected $class = '';
    protected $component = array();

    public function __construct($ctx = null) {
        $this->ctx = $ctx ?: $this;
    }

    /**
     * 提供属性方式访问
     * @param string $key
     * @return mixed
     */
    public function __get($key) {
        if (!isset ($this->component[$key])) {
            $func = "get" . $key;
            if (method_exists($this, $func)) {
                $this->component[$key] = $this->$func();
            } else {
                $class = ucfirst($key);
                if (class_exists($class)) {
                    $this->component[$key] = new $class($this->ctx);
                } else {
                    trigger_error(get_class($this) . ' unhandled key: ' . $key, E_USER_NOTICE);
                }
            }
        }

        return isset($this->component[$key]) ? $this->component[$key] : null;
    }
}