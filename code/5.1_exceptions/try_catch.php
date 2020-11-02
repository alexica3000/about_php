<?php

try {
//    throw new Exception('This is error...', 300);
    throw new RuntimeException('This is error...', 300);
    echo 'No error.' . PHP_EOL;
} catch (RuntimeException $e) {
    echo 'Runtime error...' . $e->getMessage() . PHP_EOL;
} catch (Exception $e) {
    echo 'There was an error.' . $e->getMessage() . PHP_EOL;
} finally {
    echo 'This is row...' . PHP_EOL;
}

echo 'THE END';
