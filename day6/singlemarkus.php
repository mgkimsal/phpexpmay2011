<?php
class foo {

    private static $instance;

    protected $data;
    
    public function getInstance() {
    
        if (!self::$instance) {
            self::$instance = new foo();            
        }
        return self::$instance;
    }
    
    protected function __construct() {
        echo "constructor";
    }
    
    public function setData($data) {
        $this->data = $data;
    }
    
    public function getData() {
        return $this->data;
    }
    
}

$t = foo::getInstance();
$t->setData("foobar");
echo $t->getData();