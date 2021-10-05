<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;

$world = new World();
$lara = new Lara();
$vincent = new Demo\Hello\Someome('Vincent');

$mary = new Demo\Hello\Someome('Mary');
$john = new Demo\Hello\Someome('John');
?>