<?php

require 'ball.php';
require 'box.php';

use BoxBalls\Ball;
use BoxBalls\Box;

$box = new Box();
$ball = new Ball();

for($i = 0; $i < rand(1, 10); $i++) {
    $box->putBall($ball);
}

echo '<br><br>';
echo 'In the box are ' . $ball->getCount() . ' balls.' . PHP_EOL;
