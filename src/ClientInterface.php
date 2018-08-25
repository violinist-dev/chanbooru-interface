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
     * @param array           $tags
     * @param int             $page
     * @param int             $limit
     *
     * @return PostInterface[]
     */
    public static function searchPosts(
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
    public static function getPostById(
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
    public static function searchTags(
        ClientInterface $client,
        $names,
        string $orderBy,
        bool $hideEmpty = true
    ): array;

    /**
     * Search tags by names.
     *
     * @param ClientInterface $client
     * @param array           $names
     * @param string          $orderBy
     *
     * @return TagInterface[]
     */
    public static function searchTagsByNames(
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
    public static function searchTagsByNamePattern(
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
    public static function searchTagByName(
        ClientInterface $client,
        string $name
    ): TagInterface;
}
