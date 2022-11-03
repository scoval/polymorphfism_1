<?php

#echo realpath(path: __DIR__ . '/../.env');
#exit;

$dotenv = Dotenv\Dotenv::creatImmutable(realpath(path:__DIR__ ."/.."));
$dotenv->load();

exit;