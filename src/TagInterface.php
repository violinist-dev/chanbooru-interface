<?php

declare(strict_types=1);

namespace DesuProject\ChanbooruInterface;

interface TagInterface
{
    public const TYPE_ARTIST = 4;
    public const TYPE_CHARACTER = 3;
    public const TYPE_GENERAL = 1;
    public const TYPE_META = 5;
    public const TYPE_MODEL = 6;
    public const TYPE_TITLE = 2;

    /**
     * Amount of posts by this tag.
     *
     * @return int|null
     */
    public function getAmountOfPosts(): ?int;

    /**
     * Tag's title.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Tag's type.
     *
     * Returns tag's type ID based on constants defined below.
     * If tag type is unknown, null should be returned.
     *
     * @return int
     */
    public function getType(): ?int;
}
