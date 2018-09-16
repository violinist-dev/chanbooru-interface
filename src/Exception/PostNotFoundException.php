<?php

declare(strict_types=1);

namespace DesuProject\ChanbooruInterface\Exception;

use Exception;

class PostNotFoundException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}
