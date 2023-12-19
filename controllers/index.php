<?php
$blade = require './utils/Blade.php';

echo $blade->render('index', ['filteredBooks' => $filteredBooks]);