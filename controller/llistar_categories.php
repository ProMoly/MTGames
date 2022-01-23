<?php
// controller/llistar_categories.php
require_once __DIR__ . '/../model/conectBD.php';
require_once __DIR__.'/../model/categories.php';

$categories = getCategories(); // Aquesta crida és al model

include __DIR__.'/../view/llistar_categories.php';

