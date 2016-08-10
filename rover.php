<?php
// Example PHP class usage for a NASA rover
// Joel McCauley - 8/10/16 - For Level Interactive
// Would liked to have made the output more readable, but wasn't sure if I could echo out HTML.

// Require rover class
require('class.rover.php');

// Load rover class
$rover = new rover();

// Set starting position rover #1
$rover->setPos(1, 2, 'N');

// Issue a command to rover #1
$rover->command('LMLMLMLMM');

// Output final location rover #1
$rover->outputPos();

// Rover #2
$rover->setPos(3, 3, 'E');
$rover->command('MMRMMRMRRM');
$rover->outputPos();

?>
