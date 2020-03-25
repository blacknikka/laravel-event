<?php

namespace App\Events;

use App\Domain\Request\Request;
use Illuminate\Queue\SerializesModels;

class RequestReceivedEvent
{
    use SerializesModels;

    /**
     * request
     *
     * @var Request
     */
    private $request;

    /**
     * request
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getEvent(): Request
    {
        return $this->request;
    }

    /**
     * get string
     *
     * @return string
     */
    public function GetRequestString(): string
    {
        return "name:" . $this->request->name() . " comment:" . $this->request->comment();
    }
}
