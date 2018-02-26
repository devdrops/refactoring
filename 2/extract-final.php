<?php

namespace Exemplo;

class SalesRepository
{
    public function salesTotal($args)
    {
        $dateRange = new \Exemplo\DateRange(
            $args['start'], $args['end']
        );

        return $this->createQueryBuilder('s')
            ->select('SUM(s.amount) AS sales_total')
            ->where('s.created_at BETWEEN :start AND :end')
            ->setParameter('start', $dateRange->getStart())
            ->setParameter('end', $dateRange->getEnd())
            ->getQuery();
    }

    public function weeklySalesTotal($args)
    {
        $dateRange = new \Exemplo\DateRange(
            $args['start'], $args['end']
        );

        return $this->createQueryBuilder('s')
            ->select('SUM(s.amount) AS weekly_sales_total')
            ->where('s.created_at BETWEEN :start AND :end')
            ->setParameter('start', $dateRange->getStart())
            ->setParameter('end', $dateRange->getWeekEnding())
            ->getQuery();
    }
}
