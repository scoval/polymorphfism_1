<?php

require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/eloquent.php';

/**@var $capsule*/

$blueprint = new Illuminate\Database\Schema\Blueprint(table: 'categories');
$blueprint->id();
$blueprint->string( column:'title');
$blueprint->string( column:'slug');
$blueprint->timestamps();
$blueprint->create();
$blueprint->build($capsule->getConnection(), new Illuminate\Database\Schema\Grammars\MySqlGrammar());