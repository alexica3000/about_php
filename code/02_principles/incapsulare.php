<?php

class Divider
{
	protected $divideTo;

	public function divide()
	{
		return 100/$this->getDivideTo();
	}

	private function getDivideTo()
	{
		return $this->divideTo;
	}

	public function setDivideTo($divideTo)
	{
		if ($divideTo == 0)
			$divideTo = 1;
		$this->divideTo = $divideTo;
	}
}

class NewDivider extends Divider
{
	public function setDivideTo($divideTo)
	{
		if ($divideTo == 0)
			$divideTo = 100;
		$this->divideTo = $divideTo;
	}
}

$divider = new NewDivider();

$divider->setDivideTo(0);
echo $divider->divide();

