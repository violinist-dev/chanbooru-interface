<?php

declare(strict_types=1);

namespace DesuProject\ChanbooruInterface;

use DesuProject\ChanbooruInterface\Exception\PostNotFoundException;
use DesuProject\ChanbooruInterface\Exception\TagNotFoundException;
use InvalidArgumentException;

interface ClientInterface
{
    /**
     * Get certain post by its ID or throw exception if nothing found.
     *
     * @param int $id
     *
     * @throws PostNotFoundException if post not found
     *
     * @return PostInterface
     */
    public function getPostById(
        int $id
    ): PostInterface;

    /**
     * Search posts.
     *
     * @param string[] $tags
     * @param int      $page
     * @param int      $limit
     *
     * @return PostInterface[]
     */
    public function searchPosts(
        array $tags,
        int $page,
        int $limit = 20
    ): array;

    /**
     * Search tag by name or throw exception if nothing found.
     *
     * @param string $name
     *
     * @throws TagNotFoundException if tag not found
     *
     * @return TagInterface
     */
    public function searchTagByName(
        string $name
    ): TagInterface;

    /**
     * @param array|null|string $names     if it's string, it will search by pattern.
     *                                     If it's array, it will search strictly by tag names
     * @param string            $orderBy
     * @param bool              $hideEmpty
     *
     * @throws InvalidArgumentException if invalid $names argument passed
     *
     * @return TagInterface[]
     */
    public function searchTags(
        $names,
        string $orderBy,
        bool $hideEmpty = true
    ): array;

    /**
     * Search tags by pattern.
     *
     * @param string $namePattern @example: girl*
     * @param string $orderBy
     *
     * @return TagInterface[]
     */
    public function searchTagsByNamePattern(
        string $namePattern,
        string $orderBy
    ): array;

    /**
     * Search tags by names.
     *
     * @param string[] $names
     * @param string   $orderBy
     *
     * @return TagInterface[]
     */
    public function searchTagsByNames(
        array $names,
        string $orderBy
    ): array;
}
