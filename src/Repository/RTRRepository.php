<?php

namespace App\Repository;

use App\Entity\RtrTbl;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr;

class RTRRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry,EntityManagerInterface $entity)
    {
        parent::__construct($registry, RtrTbl::class);
        $this->entityManager = $entity;
    }

    public function getYear(){
        return $this->createQueryBuilder('r')
                ->select('distinct year(r.dateReceived) as year')
                ->orderBy('year', 'DESC')
                ->getQuery()
                ->getResult()
        ;
    }

}