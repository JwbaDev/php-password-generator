<?php

require 'vendor/autoload.php';

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

$generator = new ComputerPasswordGenerator();

$generator
  ->setUppercase()
  ->setLowercase()
  ->setNumbers()
  ->setSymbols(true)
  ->setLength(25);

$password = $generator->generatePasswords(10);

var_dump($password);