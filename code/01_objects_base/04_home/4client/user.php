<?php

namespace App\user;

class User
{
	public $FIO;
	public $email;
	public $phone;
	public $gender;
	public $age;

	public function __construct($FIO, $email, $phone="", $gender="", $age="")
	{
		$this->FIO = $FIO;
		$this->email = $email;
		$this->phone = $phone;
		$this->gender = $gender;
		$this->age = $age;
	}

	private function notifyOnEmail($message)
	{
		$this->send("email", $this->email, $message);
	}

	private function notifyOnPhone($message)
	{
		if ($this->phone != "") {
			$this->send("phone", $this->phone, $message);
		}
	}

	public function notify($message)
	{
		if ($this->age < 18) {
			$message = $this->censor($message);
		}
		$this->notifyOnEmail($message);
		$this->notifyOnPhone($message);
	}

	private function censor($message)
	{
		$censorWords = ['bll', 'blaa'];
		foreach ($censorWords as $word) {
			if (strpos($message, $word) !== false) {
				$message = str_replace($censorWords, "***", $message);
				return $message;
			}
		}
		return $message;
	}

	private function send($type, $where, $message)
	{
		echo "<div>Client notification: $this->FIO for $type ($where): $message</div>";
	}
}
