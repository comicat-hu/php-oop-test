<?php
/**
 * PHP version 5.6.31
 * Object clone example
 *
 * @category None
 * @package  None
 * @author   comi.hu
 * @license  PHP License
 * @link     None
 */

class A
{
    public $count = 1;
    public $obj;

    public function __construct()
    {
        $this->obj = new B();
    }

    public function __clone()
    {
        $this->count ++;
        $this->obj = clone $this->obj;
    }
}

class B
{
    public $say = 'yes';
}


$a = new A();

$b = clone $a;

var_dump($a);
var_dump($b);

$b->obj->say = 'no';

var_dump($a);
var_dump($b);
