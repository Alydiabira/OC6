<?php

namespace App\Repository;

use App\Entity\Post;
use App\Entity\Tag;
use App\Pagination\Paginator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * Retrieve paginated posts, optionally filtered by tag.
     * 
     * @param int $page The page number for pagination.
     * @param Tag|null $tag The optional tag to filter posts.
     * 
     * @return array Paginated list of posts.
     */
    public function findLatest(int $page = 1, ?Tag $tag = null): array
    {
        // Query builder for posts
        $qb = $this->createQueryBuilder('p')
            ->addSelect('a', 't')
            ->innerJoin('p.author', 'a')
            ->leftJoin('p.tags', 't')
            ->where('p.publishedAt <= :now')
            ->orderBy('p.publishedAt', 'DESC')
            ->setParameter('now', new \DateTimeImmutable())
        ;

        if ($tag) {
            // Ensure the filter by tag is added correctly
            $qb->andWhere(':tag MEMBER OF p.tags')
               ->setParameter('tag', $tag);
        }

        // Use the Paginator to get paginated result
        $paginator = (new Paginator($qb))->paginate($page);

        // Return the paginated data as an array using the paginator's methods
        return [
            'data' => $paginator->getData(),               // Use getData() to fetch posts data
            'currentPage' => $paginator->getCurrentPage(),  // Fetch the current page
            'pageCount' => $paginator->getLastPage(),      // Fetch total number of pages
            'totalItems' => $paginator->getNumResults(),   // Fetch total number of items
        ];
    }

    /**
     * Retrieves posts associated with a specific tag, with pagination.
     * 
     * @param int $page The page number for pagination.
     * @param Tag $tag The tag to filter posts.
     * 
     * @return array Paginated posts associated with the tag.
     */
    public function findByTag(Tag $tag, int $page = 1): array
    {
        // Query builder for posts by tag
        $qb = $this->createQueryBuilder('p')
            ->innerJoin('p.tags', 't')
            ->where('t = :tag')
            ->setParameter('tag', $tag)
            ->orderBy('p.publishedAt', 'DESC')
        ;

        // Use the Paginator to get paginated result
        $paginator = (new Paginator($qb))->paginate($page);

        // Return the paginated data as an array using the paginator's methods
        return [
            'data' => $paginator->getData(),               // Use getData() to fetch posts data
            'currentPage' => $paginator->getCurrentPage(),  // Fetch the current page
            'pageCount' => $paginator->getLastPage(),      // Fetch total number of pages
            'totalItems' => $paginator->getNumResults(),   // Fetch total number of items
        ];
    }

    /**
     * Searches for posts matching the given query string.
     * 
     * @param string $query The search query string.
     * @param int $limit The maximum number of posts to return (default is PAGE_SIZE).
     * 
     * @return array Paginated search results.
     */
    public function findBySearchQuery(string $query, int $limit = Paginator::PAGE_SIZE, int $page = 1): array
    {
        // Query builder for search
        $queryBuilder = $this->createQueryBuilder('p')
            ->where('LOWER(p.title) LIKE :query')
            ->setParameter('query', '%' . strtolower($query) . '%')
            ->orderBy('p.publishedAt', 'DESC');

        // Use the Paginator to get paginated result
        $paginator = (new Paginator($queryBuilder))->paginate($page);

        // Return the paginated data as an array using the paginator's methods
        return [
            'data' => $paginator->getData(),               // Use getData() to fetch posts data
            'currentPage' => $paginator->getCurrentPage(),  // Fetch the current page
            'pageCount' => $paginator->getLastPage(),      // Fetch total number of pages
            'totalItems' => $paginator->getNumResults(),   // Fetch total number of items
        ];
    }
}
