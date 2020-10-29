<?php

namespace App\Box;

class BlackBox
{
	private $data = [];

	public function addLog($message)
	{
		$this->data[] = $message;
	}

	public function getDataByEngineer(Engineer $engineer)
	{
		return $this->data;
	}
}

class Plane
{
	private $blackBox;

	public function __construct(BlackBox $blackBox)
	{
		$this->blackBox = $blackBox;
	}

	public function flyAndCrush()
	{
		$this->flyProcess();
		$this->crushProcess();
	}

	public function flyProcess()
	{
		$this->addLog('Полёт нормальный');
	}

	private function crushProcess()
	{
		$this->addLog('Крушение самолета');
	}

	protected function addLog($message)
	{
		$this->blackBox->addLog($message);
	}

	public function getBoxForEngineer(Engineer $engineer)
	{
		$engineer->setBox($this->blackBox);
	}
}

class AnotherPlane extends Plane
{
	public function flyAndCrush()
	{
		$this->flyProcess();
		$this->crushProcess();
	}

	public function flyProcess()
	{
		$this->addLog('Хорошо летит');
	}

	private function crushProcess()
	{
		$this->addLog('Самолёт упал');
	}
}

class Engineer
{
	public function setBox(BlackBox $blackBox)
	{
		$this->blackBox = $blackBox;
	}

	public function takeBox(Plane $plane)
	{
		$plane->getBoxForEngineer($this);
	}

	public function decodeBox()
	{
		foreach($this->blackBox->getDataByEngineer($this) as $message) {
			echo "<div>" . $message . "</div>";
		}
	}
}
