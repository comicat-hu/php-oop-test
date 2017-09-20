<?php
/**
 * PHP version 5.6.31
 * Namespace example
 *
 * @category None
 * @package  None
 * @author   comi.hu <comi.hu@104.com.tw>
 * @license  PHP License
 * @link     None
 */

namespace Namespace1;

class Boy
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function go()
    {
        echo 'Go NS1! ' . $this->name . "!!\n";
    }
}


