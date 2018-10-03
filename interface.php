<?php
/**
 * PHP version 5.6.31
 * Interface and abstract class example
 *
 * @category None
 * @package  None
 * @author   comi.hu
 * @license  PHP License
 * @link     None
 */

trait Play
{
    public function run()
    {
        echo 'run and play with people';
    }
}

interface Action
{
    public function run();
    public function fast();
}
 
abstract class Animal implements Action
{
    public function run()
    {
        $this->fast();
    }
}

class Dog extends Animal
{
    public function fast()
    {
        echo 'very fast.';
    }
}

class Cat extends Animal
{
    use Play;
    public function fast()
    {
        echo 'very slow.';
    }
}

$myDog = new Dog();
$myCat = new Cat();

$myDog->run();
$myCat->run();