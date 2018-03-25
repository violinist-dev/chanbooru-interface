<?php

namespace DesuProject\ChanbooruInterface;

interface FileInterface
{
    const TYPE_IMAGE = 1;
    const TYPE_VIDEO = 2;

    /**
     * File size in bytes.
     *
     * @return int
     */
    public function getSize(): int;

    /**
     * URL to file.
     *
     * @return string
     */
    public function getUrl(): string;

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
     * File width in pixels.
     *
     * @return int
     */
    public function getWidth(): int;

    /**
     * File height in pixels.
     *
     * @return int
     */
    public function getHeight(): int;

    /**
     * File duration in seconds.
     *
     * Only for videos and GIFs (if imageboard returns its duration).
     *
     * @return null|int
     */
    public function getDuration(): ?int;
}
