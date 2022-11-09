<?php

namespace App\Message;

final class CommentMessage
{
    private int $id;
    private array $context;
    private string $reviewUrl;

    public function __construct(int $id, string $reviewUrl, array $context = [],)
    {
        $this->id = $id;
        $this->context = $context;
        $this->reviewUrl = $reviewUrl;
    }

    public function getViewUrl(): string
    {
        return $this->reviewUrl;
    }

    public function getId(): int
    {
       return $this->id;
    }

    public function getContext(): array
    {
       return $this->context;
    }
}
