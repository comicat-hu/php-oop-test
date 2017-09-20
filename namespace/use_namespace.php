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

spl_autoload_register(
    function ($class) {
        include_once 'vendors\\' . $class . '.php';
    }
);

use Namespace1 as NS1;
use Namespace2 as NS2;

$boy1 = new NS1\Boy('Comi');
$boy2 = new NS2\Boy('Comi');

$boy1->go();
$boy2->go();
