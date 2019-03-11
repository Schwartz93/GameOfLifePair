<?php
/**
 * Created by PhpStorm.
 * User: michael.schwartz
 * Date: 08.03.2019
 * Time: 15:29
 */

namespace GameOfLife;

require "src/Board.php";

$test = new Board();
$test->getRawFileFromCsv();
$test->displayGrid();
