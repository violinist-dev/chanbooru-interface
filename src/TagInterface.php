<?php

namespace DesuProject\ChanbooruInterface;

interface TagInterface
{
    /**
     * Tag's ID.
     *
     * @return int|string
     */
    public function getId();

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
     * Tag's type.
     *
     * Returns tag's type ID. It's recommended to create constants in
     * classes that implement this interface begins with `TYPE_`. E.g.:
     * `TYPE_CHARACTER = 2;`.
     *
     * @return int
     */
    public function getType(): int;
}
