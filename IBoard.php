<?php
/**
 * Created by PhpStorm.
 * User: michael.schwartz
 * Date: 08.03.2019
 * Time: 15:48
 */

interface IBoard
{
    public function generateGrid($width, $height);
    public function displayGrid();

}