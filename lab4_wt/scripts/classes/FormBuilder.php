<?php

class FormBuilder
{
    const METHOD_POST = "post";
    const METHOD_GET  = "get";

    protected $form;
    protected $value;

    public function __construct($method, $directory, $value)
    {
        $this->value = $value;


        $this->form = "<p><form method=\"$method\" target=\"$directory\"></p>".PHP_EOL;
    }

    public function addTextField($name, $value)
    {
        $this->form .= "<p><input type=\"text\" name=\"$name\" value=\"$value\" /></p>".PHP_EOL;
    }

    public function addRadioGroup($name, $values, $selected=null)
    {
        foreach($values as $value)
        {
            $this->form .= "<p><input type=\"radio\" name=\"$name\" value=\"$value\" ";

            if ($selected == $value)
                $this->form .= " checked ";

            $this->form .= "/></p>".PHP_EOL;
        }
    }

    public function getForm()
    {
        $this->form .= "<input type=\"submit\" value=\"$this->value\" />".PHP_EOL."</form>".PHP_EOL;
        echo $this->form;
    }
}
