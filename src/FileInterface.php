<?php

declare(strict_types=1);

namespace DesuProject\ChanbooruInterface;

interface FileInterface
{
    public const TYPE_IMAGE = 1;
    public const TYPE_VIDEO = 2;

    /**
     * File height in pixels.
     *
     * @return int
     */
    public function getHeight(): int;

    /**
     * File size in bytes.
     *
     * @return int
     */
    public function getSize(): int;

    /**
     * File type.
     *
     * Detecting file type based on it's extension or post's object fields.
     * If file type is unknown, `null` returned.
     *
     * @return int|null
     */
    public function getType(): ?int;

    /**
     * URL to file.
     *
     * @return string
     */
    public function getUrl(): string;

    /**
     * File width in pixels.
     *
     * @return int
     */
    public function getWidth(): int;
}
