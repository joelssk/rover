<?php
require('class.rover.php');

$rover = new rover();
$rover->setPos(1, 2, 'N');
$rover->command('LMLMLMLMM');
$rover->outputPos();
$rover->setPos(3, 3, 'E');
$rover->command('MMRMMRMRRM');
$rover->outputPos();

?>
