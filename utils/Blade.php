<?php
require __DIR__.'/../vendor/autoload.php';
use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');
return $blade;