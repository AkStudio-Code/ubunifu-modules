<?php


use Authentication\auth\User;
use Authentication\auth\Xauth;
use DbIlluminate\Db\DatabaseFactory;


require 'vendor/autoload.php';

$auth = new Xauth(new User(new DatabaseFactory()));

var_dump($auth ->login());
