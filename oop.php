<?php
/**
 * PHP version 5.6.31
 * OOP practice
 *
 * @category None
 * @package  None
 * @author   comi.hu
 * @license  PHP License
 * @link     None
 */

abstract class Transportation
{
    public $cost = 0;
    protected $maxSpeed = 0;
    protected $area = '';
    private $_hasDriver = true;

    public function getCost()
    {
        return '$' . $this->cost . "\n";
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed . ' km/h' . "\n";
    }

    public function getArea()
    {
        return $this->area . "\n";
    }

    public function hasDriver()
    {
        return $this->_hasDriver;
    }


}

class Car extends Transportation
{
    public function __construct($cost, $maxSpeed, $area){
        $this->cost = $cost;
        $this->maxSpeed = $maxSpeed;
        $this->area = $area;
    }
}

$myCar = new Car(500, 120, 'ground');


echo $myCar->getCost();
echo $myCar->getMaxSpeed();
echo $myCar->getArea();
echo var_dump($myCar->hasDriver());
