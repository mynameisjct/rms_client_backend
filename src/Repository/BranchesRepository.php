<?php

namespace App\Repository;

use App\Entity\Branches;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr;


class BranchesRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry,EntityManagerInterface $entity)
    {
        parent::__construct($registry, Branches::class);
        $this->entityManager = $entity;
    }

    public function getList(){
        return $this->createQueryBuilder('b')
                ->select('b.id,b.name')
                ->getQuery()
                ->getResult()
        ;
    }

}
