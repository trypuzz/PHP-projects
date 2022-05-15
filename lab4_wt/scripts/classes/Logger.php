<?php

class Logger
{
    const SCREEN = 1;
    const FILE = 2;

    private $inputType;
    private $inputFile;

    public function __construct($file=null)
    {
        $this->inputType = self::SCREEN;
        if ($file != null)
        {
            $this->inputFile = fopen($file, "at");
            $this->inputType = self::FILE;
        }
    }

    public function info($msg)
    {
        $text = date("Y-m-d H:i:s")." | [INFO] ";
        $text .= $msg;

        $this->write($text);
    }

    public function warning($msg)
    {
        $text = date("Y-m-d H:i:s")." | [WARNING] ";
        $text .= $msg;

        $this->write($text);
    }

    public function error($msg)
    {
        $text = date("Y-m-d H:i:s")." | [ERROR] ";
        $text .= $msg;


        $this->write($text);
    }

    public function end()
    {
        if ($this->inputType == self::FILE)
            fclose($this->inputFile);
    }

    private function write($text)
    {
        if ($this->inputType == self::SCREEN)
            echo "<p>$text</p>";
        else
            fwrite($this->inputFile, $text.PHP_EOL);
    }
}