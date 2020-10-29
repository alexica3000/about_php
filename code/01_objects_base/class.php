<?php

require 'auth/user.php';
require 'social/user.php';

use \App\Auth\user;

$user = new user;
var_dump($user->getName());

