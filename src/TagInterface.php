<?php

namespace DesuProject\ChanbooruInterface;

interface TagInterface
{
    const TYPE_GENERAL = 1;
    const TYPE_TITLE = 2;
    const TYPE_CHARACTER = 3;
    const TYPE_ARTIST = 4;
    const TYPE_META = 5;
    const TYPE_MODEL = 6;

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
