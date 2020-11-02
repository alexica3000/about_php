<?php

namespace App\Users;

class user
{
	public $name = "Maria";
	public $age = 22;
	public $birthday = [29,03,2018];
}

class cat
{
	const LEGS = 4;
	
	public $name = "Mark";

	public function say()
	{
		echo "Miau";
	}

	public function sleep($hours = 1)
	{
		echo "Cat sleeps $hours hours.";
	}
}

echo $_SERVER['DOCUMENT_ROOT'];

// var_dump(__NAMESPACE__);

// $user = new \App\Users\user();
// echo $user->name;

// echo $cat::LEGS;
// $cat->say();
// $cat->sleep(5);

// var_dump($user);
// echo "<br><br>";
// var_dump($cat);

?>
