<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator as DoctrinePaginator;
use Doctrine\Persistence\ManagerRegistry;

class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    /**
     * Recherche paginée des livres
     */
    public function findPaginated(int $page, int $limit): array
    {
        $query = $this->createQueryBuilder('b')
            ->orderBy('b.createdAt', 'DESC')
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery();

        $paginator = new DoctrinePaginator($query);
        $totalItems = count($paginator);
        $pageCount = (int) ceil($totalItems / $limit);

        return [
            'data'        => iterator_to_array($paginator),
            'currentPage' => $page,
            'pageCount'   => $pageCount,
            'totalItems'  => $totalItems,
        ];
    }

    /**
     * Recherche par titre ou nom d’auteur
     */
    public function searchByTitleOrAuthor(?string $query): array
    {
        $query = trim((string) $query);

        if ($query === '') {
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

    /**
     * Récupère les derniers livres ajoutés
     */
    public function findLatest(int $limit = 4): array
    {
        return $this->createQueryBuilder('b')
            ->orderBy('b.createdAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
