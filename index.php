<?php

use Ecomo\Entity;

require_once "vendor/autoload.php";

$entity = new Entity(22);

var_dump(arr($entity)["id"]);
var_dump(std($entity)->id);