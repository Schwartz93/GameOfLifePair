<?php
/**
 * Created by PhpStorm.
 * User: michael.schwartz
 * Date: 08.03.2019
 * Time: 15:47
 */


namespace GameOfLife;

require "IBoard.php";

class Board extends IBoard {

    public $name;
    public $width;
    public $height;
    public $cells;

    public function __construct($name, $width, $height)
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->cells = [];
    }

    public function generateGrid($width, $height)
    {

    }

    public function displayGrid()
    {

    }
}