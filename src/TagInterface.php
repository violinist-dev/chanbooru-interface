<?php

namespace DesuProject\ChanbooruInterface;

interface TagInterface
{
    const TYPE_TITLE = 1;
    const TYPE_CHARACTER = 2;
    const TYPE_ARTIST = 3;
    const TYPE_META = 4;
    const TYPE_MODEL = 5;

    /**
     * Tag's title.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Amount of posts by this tag.
     *
     * @return int|null
     */
    public function getAmountOfPosts(): ?int;

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
