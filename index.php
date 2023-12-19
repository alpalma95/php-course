<?php
require './routes.php';
$uri = $_SERVER['REQUEST_URI'];

$loadRoute(parse_url($uri)['path']);