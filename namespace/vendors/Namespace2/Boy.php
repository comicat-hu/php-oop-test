<?php
/**
 * PHP version 5.6.31
 * Namespace example
 *
 * @category None
 * @package  None
 * @author   comi.hu
 * @license  PHP License
 * @link     None
 */

namespace Namespace2;

class Boy
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function go()
    {
        echo 'Go NS2! ' . $this->name . "!!\n";
    }
}
