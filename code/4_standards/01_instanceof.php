<?php

require_once 'App/Shop/Order.php';

$config = [
    'order' => '\App\Shop\Order'
];

if (class_exists($config['order'])) {
    echo 'Class ' . $config['order'] . ' exists.' . PHP_EOL;
}

if (trait_exists('WithPrice')) {
    echo 'Trait WithPrice exists.' . PHP_EOL;
}

if (interface_exists('HasPrice')) {
    echo 'Interface HasPrice exists.' . PHP_EOL;
}

//echo '<pre>';
//print_r(get_declared_classes());
//print_r(get_declared_interfaces());
//print_r(get_declared_traits());
//echo '</pre>';

$order = new $config['order'];
$order->test();

$order->getClassVars();
$order->getClassMethods();

if ($order instanceof \App\Shop\HasPrice) {
    echo $order->getPrice();
} else {
    $order->test();
}

// instanceof
// is_a
// is_subclass_of

echo get_class($order);
echo get_parent_class($order);

var_dump(method_exists($order, 'getPrice'));
var_dump(property_exists($order, 'test1'));
