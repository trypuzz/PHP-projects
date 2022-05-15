<?php

class TableBuilder
{
    private $table;

    public function __construct($border=0)
    {
        $this->table = "<table border='$border'>".PHP_EOL;
    }

    public function addHeadRow($cells)
    {
        $this->table .= "<tr>".PHP_EOL;

        foreach ($cells as $cell)
        {
            $this->table .= "<th>$cell</th>";
        }

        $this->table .= "</tr>".PHP_EOL;
    }

    public function addRow($cells)
    {
        $this->table .= "<tr>".PHP_EOL;

        foreach ($cells as $cell)
        {
            $this->table .= "<td>$cell</td>";
        }

        $this->table .= "</tr>".PHP_EOL;
    }

    public function getTable()
    {
        $this->table .= "</table>".PHP_EOL;
        echo $this->table;
    }
}