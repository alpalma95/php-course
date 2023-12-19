<?php
$blade = require './utils/Blade.php';

echo $blade->render('contact', ['filteredBooks' => $filteredBooks]);