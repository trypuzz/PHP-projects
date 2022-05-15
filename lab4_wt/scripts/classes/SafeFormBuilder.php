<?php
require 'FormBuilder.php';

class SafeFormBuilder extends FormBuilder
{
    private $lastValues;
    private $currLastValue = 0;

    function __construct($method, $directory, $value)
    {
        parent::__construct($method, $directory, $value);

        if ($method == self::METHOD_POST)
            $this->lastValues = $_POST;
        else
            $this->lastValues = $_GET;
    }

    public function addTextField($name, $value)
    {
        $value = $this->requestToLastValues($name, $value);

        parent::addTextField($name, $value);

        $this->writeToArrays($name, $value);
    }

    public function addRadioGroup($name, $values, $selected=null)
    {
        $selected = $this->requestToLastValues($name, $selected);

        parent::addRadioGroup($name, $values, $selected);

        $this->writeToArrays($name, $selected);
    }

    private function requestToLastValues($name, $value)
    {
        if ($this->lastValues != null)
            if (array_key_exists($name, $this->lastValues))
                $value = $this->lastValues[$name];

        return $value;
    }

    private function writeToArrays($name, $value)
    {
        $_POST[$name] = $value;
        $_GET[$name] = $value;
    }

}