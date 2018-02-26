<?php

namespace Exemplo;

class DateRange
{
    private $start;
    private $end;

    public function __construct($start, $end)
    {
        $this->start = new \DateTime($start);
        $this->end = new \DateTime($end);
    }

    public function getStart()
    {
        return $this->start->format('Y-m-d');
    }

    public function getEnd()
    {
        return $this->end->format('Y-m-d');
    }

    public function getWeekEnding()
    {
        $weekEnd = $this->end;
        return $weekEnd->add(new \DateInterval('P6D'))
            ->format('Y-m-d');
    }
}
