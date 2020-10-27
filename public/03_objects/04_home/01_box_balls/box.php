<?php

namespace BoxBalls;

class Box
{
    public function putBall(Ball $ball)
    {
        $ball->increase();

        echo "<div>Ball added to cart.</div>";
    }
}
