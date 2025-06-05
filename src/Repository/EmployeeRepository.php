<?php

namespace App\Repository;

use App\Entity\Company;
use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Employee>
 */
class EmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employee::class);
    }

    /**
     * @param Company $company
     * @return Employee[]
     */
    public function getCompanyEmployees(Company $company): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.company = :company')
            ->setParameter('company', $company)
            ->getQuery()
            ->getResult();
    }
}
