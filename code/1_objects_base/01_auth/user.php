<?php

namespace App\Auth;

class user
{
	public $name = "Michael";

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
}

?>
