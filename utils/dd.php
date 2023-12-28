<?php

function dd($val)
{
    echo "<br> <pre>";
    var_dump($val);
    echo "</pre>";
    die();
};