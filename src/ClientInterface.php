<?php

namespace DesuProject\ChanbooruInterface;

interface ClientInterface
{
    /**
     * Search posts.
     *
     * @param string[] $tags  array of tags
     * @param int|null $page  Page number. If `null`,
     *                        first page will be requested.
     * @param int|null $limit How much posts to show. If `null`,
     *                        default imageboard's limit will be used.
     *
     * @return PostInterface[]
     */
    public function search(
        array $tags = [],
        ?int $page = null,
        ?int $limit = null
    ): array;
}
