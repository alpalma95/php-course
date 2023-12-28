<?php
// require './routes.php';
require_once './utils/dd.php';
require_once './utils/Database.php';
// $uri = $_SERVER['REQUEST_URI'];

// $loadRoute(parse_url($uri)['path']);

$db = new Database();
$id = $_GET['id'] ?? 2;

$posts = $db->query("select * from 'posts' where id = :id", ['id' => $id])->fetchAll();

dd($posts);
