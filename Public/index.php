<?php

require_once('../Framework/Autoloader.php');
$autoloader = new Autoloader('../Framework/', 'Gen2\\');
$autoloader->register();

$routeur = new Gen2\Routeur();
