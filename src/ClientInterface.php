<?php

namespace DesuProject\ChanbooruInterface;

use DesuProject\ChanbooruInterface\Exception\PostNotFoundException;
use DesuProject\ChanbooruInterface\Exception\TagNotFoundException;
use InvalidArgumentException;

interface ClientInterface
{
    /**
     * Search posts.
     *
     * @param ClientInterface $client
     * @param string[]        $tags
     * @param int             $page
     * @param int             $limit
     *
     * @return PostInterface[]
     */
    public function searchPosts(
        ClientInterface $client,
        array $tags,
        int $page,
        int $limit = 20
    ): array;

    /**
     * Get certain post by its ID or throw exception if nothing found.
     *
     * @param ClientInterface $client
     * @param int             $id
     *
     * @return PostInterface
     *
     * @throws PostNotFoundException if post not found
     */
    public function getPostById(
        ClientInterface $client,
        int $id
    ): PostInterface;

    /**
     * @param ClientInterface   $client
     * @param array|null|string $names   If it's string, it will search by pattern.
     *                                   If it's array, it will search strictly by tag names.
     * @param string            $orderBy
     * @param bool              $hideEmpty
     *
     * @return TagInterface[]
     *
     * @throws InvalidArgumentException if invalid $names argument passed
     */
    public function searchTags(
        ClientInterface $client,
        $names,
        string $orderBy,
        bool $hideEmpty = true
    ): array;

    /**
     * Search tags by names.
     *
     * @param ClientInterface $client
     * @param string[]        $names
     * @param string          $orderBy
     *
     * @return TagInterface[]
     */
    public function searchTagsByNames(
        ClientInterface $client,
        array $names,
        string $orderBy
    ): array;

    /**
     * Search tags by pattern.
     *
     * @param ClientInterface $client
     * @param string          $namePattern @example: girl*
     * @param string          $orderBy
     *
     * @return TagInterface[]
     */
    public function searchTagsByNamePattern(
        ClientInterface $client,
        string $namePattern,
        string $orderBy
    ): array;

    /**
     * Search tag by name or throw exception if nothing found.
     *
     * @param ClientInterface $client
     * @param string          $name
     *
     * @return TagInterface
     *
     * @throws TagNotFoundException if tag not found
     */
    public function searchTagByName(
        ClientInterface $client,
        string $name
    ): TagInterface;
}
