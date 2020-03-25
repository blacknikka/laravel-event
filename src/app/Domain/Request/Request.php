<?php

namespace App\Domain\Request;

class Request
{
    /**
     * name
     *
     * @var string name
     */
    private $name;

    /**
     * comment for this request
     *
     * @var string
     */
    private $comment;
    public function __construct(string $name, string $comment)
    {
        $this->name = $name;
        $this->comment = $comment;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function comment(): string
    {
        return $this->comment;
    }
}
