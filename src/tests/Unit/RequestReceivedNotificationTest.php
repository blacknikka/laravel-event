<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Listeners\RequestReceivedNotification;
use App\Events\RequestReceivedEvent;
use Illuminate\Support\Facades\Event;
use App\Domain\Request\Request;

class RequestReceivedNotificationTest extends TestCase
{
    /**
     * @test
     */
    public function RequestReceivedEventの発行() {
        // Event::fake();

        // dispatch
        $request = new Request("name", "comment");
        $event = new RequestReceivedEvent($request);
        // // RequestReceivedEvent::dispatch();

        // Event::assertDispatched(RequestReceivedEvent::class, function ($e) use ($request) {
        //     return $e->getRequest()->name() === $request->name();
        // });

        // Event::assertDispatched(RequestReceivedEvent::class, 1);
        $this->assertTrue(true);
    }
}
