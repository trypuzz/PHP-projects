<?php

class SmartDate
{
    const YEAR   = 1;
    const MONTH  = 2;
    const DAY    = 3;
    const HOUR   = 4;
    const MINUTE = 5;
    const SECOND = 6;

    private $time;
    private $isCorrect;

    public function __construct($year=2003, $month=1, $day=19, $hours=0, $minutes=0, $seconds=0)
    {
        if (!is_numeric($year) || !is_numeric($month) || !is_numeric($day))
        {
            $this->isCorrect = false;
        }
        else
        {
            $this->isCorrect = $year > 100 && checkdate($month, $day, $year);
            $this->time = mktime($hours, $minutes, $seconds, $month, $day, $year);
        }
    }

    public function isCorrect()
    {
        return $this->isCorrect;
    }

    public function getDiff($format)
    {
        $diff = time() - $this->time;

        switch ($format)
        {
            case self::YEAR:
                return floor($diff/(60*60*24*365));
            case self::MONTH:
                return floor($diff/(60*60*24*30));
            case self::DAY:
                return floor($diff/(60*60*24));
            case self::HOUR:
                return floor($diff/(60*60));
            case self::MINUTE:
                return floor($diff/(60));
            case self::SECOND:
                return floor($diff);
            default:
                return 0;
        }
    }

    public function isWeekend()
    {
        $weekDay = date("N", $this->time);
        if ($weekDay >= 6)
            return true;
        else
            return false;
    }

    public function isLeap()
    {
        return date("L", $this->time) === "1";
    }

    public function getWeekDay()
    {
        $day = date("N", $this->time);

        switch ($day) {
            case 1:
                return "Понедельник";
            case 2:
                return "Вторник";
            case 3:
                return "Среда";
            case 4:
                return "Четверг";
            case 5:
                return "Пятница";
            case 6:
                return "Суббота";
            case 7:
                return "Воскресенье";

        }

    }
}