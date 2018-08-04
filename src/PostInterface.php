<?php

namespace DesuProject\ChanbooruInterface;

use DateTime;

interface PostInterface
{
    const RATING_SAFE = 1;
    const RATING_QUESTIONABLE = 2;
    const RATING_EXPLICIT = 3;

    const STATUS_PUBLISHED = 1;
    const STATUS_PENDING_MODERATION = 2;
    const STATUS_DELETED = 3;

    /**
     * Post's ID.
     *
     * @return int|string
     */
    public function getId();

    /**
     * Post's tags.
     *
     * @return TagInterface[]
     */
    public function getTags(): array;

    /**
     * Date when post was created.
     *
     * @return DateTime
     */
    public function getCreationDate(): DateTime;

    /**
     * File's hash.
     *
     * Such as MD5, SHA256 and others.
     *
     * @return null|string
     */
    public function getHash(): ?string;

    /**
     * Post's rating.
     *
     * Returns `RATING_` contants' values.
     *
     * @return int
     */
    public function getRating(): int;

    /**
     * Post's score.
     *
     * Score means how people rate the post.
     *
     * @return int
     */
    public function getScore(): int;

    /**
     * Post's status.
     *
     * Returns `STATUS_` contants' values.
     *
     * @return int
     */
    public function getStatus(): int;

    /**
     * Source file.
     *
     * @return null|FileInterface
     */
    public function getSourceFile(): ?FileInterface;

    /**
     * Preview image URL.
     *
     * @return null|string
     */
    public function getPreviewImageUrl(): ?string;

    /**
     * File source.
     *
     * @return null|string
     */
    public function getSource(): ?string;

    /**
     * Is it possible to access the post or not.
     *
     * Imageboards (like Danbooru) may provide access to some posts only for
     * premium users due censorship or something like that.
     *
     * @return bool
     */
    public function isPostCensored(): bool;
}
