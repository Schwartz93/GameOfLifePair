<?php
/**
 * Created by PhpStorm.
 * User: michael.schwartz
 * Date: 08.03.2019
 * Time: 15:29
 */

namespace GameOfLife;

require "src/GetStartPattern.php";

$test = new GetStartPattern();
$test->getFileNameFromCsv();
$test->getPattern();