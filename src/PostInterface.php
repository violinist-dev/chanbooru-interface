<?php

declare(strict_types=1);

namespace DesuProject\ChanbooruInterface;

interface PostInterface
{
    public const RATING_EXPLICIT = 3;
    public const RATING_QUESTIONABLE = 2;
    public const RATING_SAFE = 1;
    public const STATUS_DELETED = 3;
    public const STATUS_PENDING_MODERATION = 2;

    public const STATUS_PUBLISHED = 1;

    /**
     * Date when post was created.
     *
     * @return \DateTimeImmutable
     */
    public function getCreationDate(): \DateTimeImmutable;

    /**
     * File's hash.
     *
     * Such as MD5, SHA256 and others.
     *
     * @return null|string
     */
    public function getHash(): ?string;

    /**
     * Post's ID.
     *
     * @return int|string
     */
    public function getId();

    /**
     * Preview image URL.
     *
     * @return null|string
     */
    public function getPreviewImageUrl(): ?string;

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
     * File source.
     *
     * @return null|string
     */
    public function getSource(): ?string;

    /**
     * Source file.
     *
     * @return null|FileInterface
     */
    public function getSourceFile(): ?FileInterface;

    /**
     * Post's status.
     *
     * Returns `STATUS_` contants' values.
     *
     * @return int
     */
    public function getStatus(): int;

    /**
     * Post's tags.
     *
     * @return TagInterface[]
     */
    public function getTags(): array;

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
