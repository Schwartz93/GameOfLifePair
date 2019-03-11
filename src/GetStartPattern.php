<?php
/**
 * Created by PhpStorm.
 * User: michael.schwartz
 * Date: 11.03.2019
 * Time: 07:12
 */


namespace GameOfLife;

class GetStartPattern
{
    public $pattern;
    public $fileName;
    public $newLine;
    public $patternArray = [];

    public function getFileNameFromCsv() {
        $this->fileName = fopen("src/Blinker.csv", "r");
        echo wordwrap(fgets($this->fileName)) . "<br>";
    }

    public function getPattern() {
        for ($i = 0; $i < 6; $i++) {
            $this->newLine = fgets($this->fileName);
            $this->patternArray = wordwrap($this->newLine, 5, "\n");
            $this->patternArray = str_split($this->patternArray);

            echo "<pre>";
                var_dump($this->patternArray);
            echo "<pre>";
        }
        fclose($this->fileName);
    }
}