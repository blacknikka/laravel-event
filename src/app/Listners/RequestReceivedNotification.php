<?php

namespace App\Listeners;

use App\Events\RequestReceivedEvent;

class RequestReceivedNotification
{
    /**
     * イベントリスナ生成
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * イベントの処理
     *
     * @param  \App\Events\RequestReceivedEvent $event
     * @return void
     */
    public function handle(RequestReceivedEvent $event)
    {
        echo $event->GetRequestString();
    }
}
