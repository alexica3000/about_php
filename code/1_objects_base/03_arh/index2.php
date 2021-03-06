<?php

echo "<div><h1>Home Zoo</h1></div>";

require '1zoo/zoo.php';
require '2HungryCat/hangry.php';
require '3toy/toy.php';
require '4client/user.php';
require '5magazin/mag.php';

use App\Zoo\Cat;
use App\Zoo\Dog;
use App\Zoo\Fish;

$cat1 = new Cat("Nico");
$cat2 = new Cat("Murca");
$cat3 = new Cat("Roberto");

$dog1 = new Dog("Mark");
$dog2 = new Dog("Tobic");
$dog3 = new Dog("Toto");
$dog4 = new Dog("Omar");
$dog5 = new Dog("Deny");

$fish1 = new Fish("Wally");

echo "<div><b>Cats:</b></div>";
echo $cat1->name;
echo "<br>";
echo $cat2->name;
echo "<br>";
echo $cat3->name;
echo "<br><br>";

echo "<div><b>Dogs:</b></div>";
echo $dog1->name;
echo "<br>";
echo $dog2->name;
echo "<br>";
echo $dog3->name;
echo "<br>";
echo $dog4->name;
echo "<br>";
echo $dog5->name;
echo "<br><br>";

echo "<div><b>Fishs:</b></div>";
echo $fish1->name;
echo "<br>";

echo "<div><h1>Hungry Cat</h1></div>";

use App\Hungry\HungryCat;

$HungryCat1 = new HungryCat("Markiz", "black", "Wiskas");
$HungryCat1->eat("Meat");
$HungryCat1->eat("pancakes");
$HungryCat1->eat("Wiskas");
$HungryCat1->eat("Chicken lunch");
$HungryCat1->eat("feed");

echo "<br>";

$HungryCat2 = new HungryCat("Boris", "white", "plov");
$HungryCat2->eat("puree");
$HungryCat2->eat("potatoes");
$HungryCat2->eat("Wiskas");
$HungryCat2->eat("pilaf");
$HungryCat2->eat("broccoli");

echo "<div><h1>Toy Factory</h1></div>";

use App\Ftoy\ToyFactory;


depoToys();
printToys();

function depoToys()
{
	global $toysNames;
	global $toysPrices;
	global $totalPrice;
	$totalPrice = 0;
	$randNr = rand(5,20);
	$toyArray = array('Puzzle','Mosaic','Beanbag','Gurney','rocking chair','car');
	for ($i=0;$i<$randNr;$i++)
	{
		$randName = $toyArray[rand(0,9)];
		$Toy = new ToyFactory($randName);
		$toysNames[] = $Toy->name;
		$toysPrices[] = $Toy->price;
		$totalPrice += $Toy->price;
	}
}

function printToys()
{
	global $toysNames;
	global $toysPrices;
	global $totalPrice;

	for($i=0;$i<sizeof($toysNames);$i++)
	{
		echo "<div>".($i+1).". ".$toysNames[$i]." - ".$toysPrices[$i]."</div>";
	}
	echo "<div><b>Итого - $totalPrice</b></div>";
}







echo "<div><h1>Customer notifications</h1></div>";

use App\user\User;

$user1 = new user("Vladimir Ignat", "email@mail.com", "079590543890");
$user1->notify("Goodbye! bll");
echo "<br>";
$user2 = new user("Klava Marvin", "klava_marvin@mail.com", "079545590542890", "girl", 35);
$user2->notify("Hello!");
echo "<br>";
$user3 = new user("Svetlana Senn", "sveta_senn@mail.com", "840653795490", "girl", 43);
$user3->notify("Ждем вас!!");
echo "<br>";
$user2 = new user("Marina Petrovna", "marina_petr@mail.com");
$user2->notify("New meeting!!");

echo "<div><h1>Internet shop</h1></div>";

use App\Magazin\Order;
use App\Magazin\Basket;
use App\Magazin\Product;

$basket = new Basket();
$product1 = new Product("Puzzle", 100);
$basket->addProduct($product1, 3);
$product2 = new Product("Mosaic", 300);
$basket->addProduct($product2, 4);
$product3 = new Product("Gurney", 500);
$basket->addProduct($product3, 2);
$product3 = new Product("car", 700);
$basket->addProduct($product3, 4);

$order = new Order($basket);

$user1 = new user("Nikolay Nikolaich", "nikolai@mail.com", "079590543890");
$user1->notify("an order has been created for you, in the amount of: ".$order->getPrice()." Composition:");
echo $basket->describe();
echo "<div><b>Total order value: ".$order->getPrice()."</b></div><br>";
echo "<br>";

