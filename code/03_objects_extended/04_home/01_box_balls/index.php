<?php

require 'ball.php';
require 'box.php';

use BoxBalls\Ball;
use BoxBalls\Box;

$box = new Box();

for($i = 0; $i < rand(1, 10); $i++) {
    $box->putBall(new Ball());
}

echo '<br><br>';
echo 'In the box are ' . Ball::$count . ' balls.' . PHP_EOL;
