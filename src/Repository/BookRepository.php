<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    /**
     * Recherche paginée des livres
     *
     * @return Paginator<Book>
     */
    public function findPaginated(int $page, int $limit): Paginator
    {
        $query = $this->createQueryBuilder('b')
            ->orderBy('b.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery();

        return new Paginator($query);
    }

    /**
     * Recherche par titre ou nom d’auteur
     *
     * @return Book[]
     */
    public function searchByTitleOrAuthor(?string $query): array
    {
        if (empty($query)) {
            return [];
        }

        return $this->createQueryBuilder('b')
            ->leftJoin('b.author', 'a')
            ->andWhere('b.title LIKE :q OR a.username LIKE :q')
            ->setParameter('q', '%' . $query . '%')
            ->orderBy('b.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
