<?php

namespace Exemplo;

class SalesRepository
{
    public function salesTotal($args)
    {
        $start = new \DateTime($args['start']);
        $end = new \DateTime($args['end']);

        return $this->createQueryBuilder('s')
            ->select('SUM(s.amount) AS sales_total')
            ->where('s.created_at >= :start')
            ->andWhere('s.created_at <= :end')
            ->setParameter('start', $start->format('Y-m-d'))
            ->setParameter('end', $end->format('Y-m-d'))
            ->getQuery();
    }

    public function weeklySalesTotal($args)
    {
        $start = new \DateTime('now');
        $end = new \DateTime('now');
        $end->add(new \DateInterval('P6D'));

        return $this->createQueryBuilder('s')
            ->select('SUM(s.amount) AS weekly_sales_total')
            ->where('s.created_at >= :start')
            ->andWhere('s.created_at <= :end')
            ->setParameter('start', $start->format('Y-m-d'))
            ->setParameter('end', $end->format('Y-m-d'))
            ->getQuery();
    }
}
