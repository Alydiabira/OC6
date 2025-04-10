<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

 namespace App\Pagination;

 use Doctrine\ORM\QueryBuilder as DoctrineQueryBuilder;
 use Doctrine\ORM\Tools\Pagination\CountWalker;
 use Doctrine\ORM\Tools\Pagination\Paginator as DoctrinePaginator;
 
 final class Paginator
 {
     final public const PAGE_SIZE = 10;
 
     private int $currentPage;
     private int $numResults;
     private \Traversable $results;
 
     public function __construct(
         private readonly DoctrineQueryBuilder $queryBuilder,
         private readonly int $pageSize = self::PAGE_SIZE,
     ) {}
 
     public function paginate(int $page = 1): self
     {
         $this->currentPage = max(1, $page);
         $firstResult = ($this->currentPage - 1) * $this->pageSize;
 
         $query = $this->queryBuilder
             ->setFirstResult($firstResult)
             ->setMaxResults($this->pageSize)
             ->getQuery();
 
         $joinDqlParts = $this->queryBuilder->getDQLPart('join');
         if (0 === \count($joinDqlParts)) {
             $query->setHint(CountWalker::HINT_DISTINCT, false);
         }
 
         $paginator = new DoctrinePaginator($query, true);
         $havingDqlParts = $this->queryBuilder->getDQLPart('having');
         $useOutputWalkers = \count($havingDqlParts ?: []) > 0;
         $paginator->setUseOutputWalkers($useOutputWalkers);
 
         $this->results = $paginator->getIterator();
         $this->numResults = $paginator->count();
 
         return $this;
     }
 
     public function getCurrentPage(): int
     {
         return $this->currentPage;
     }
 
     public function getLastPage(): int
     {
         return (int) ceil($this->numResults / $this->pageSize);
     }
 
     public function getPageSize(): int
     {
         return $this->pageSize;
     }
 
     public function hasPreviousPage(): bool
     {
         return $this->currentPage > 1;
     }
 
     public function getPreviousPage(): int
     {
         return max(1, $this->currentPage - 1);
     }
 
     public function hasNextPage(): bool
     {
         return $this->currentPage < $this->getLastPage();
     }
 
     public function getNextPage(): int
     {
         return min($this->getLastPage(), $this->currentPage + 1);
     }
 
     public function hasToPaginate(): bool
     {
         return $this->numResults > $this->pageSize;
     }
 
     public function getNumResults(): int
     {
         return $this->numResults;
     }
 
     /**
      * Get the paginated results as an array.
      */
     public function getData(): array
     {
         return iterator_to_array($this->results);
     }
 
     /**
      * Get paginated data in array format.
      */
     public function getPaginatedData(): array
     {
         return [
             'data' => iterator_to_array($this->results),
             'currentPage' => $this->currentPage,
             'pageCount' => $this->getPageCount(),  // Ensure this is calculated correctly
             'totalItems' => $this->numResults,
         ];
     }
 
     /**
      * Calculate and return the total page count.
      */
     public function getPageCount(): int
     {
         // Calculate the total number of pages
         return (int) ceil($this->numResults / $this->pageSize);
     }
 }
 