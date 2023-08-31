<?php

namespace App\Listeners;

use App\Events\ChatMessage;
use App\Notifications\ChatMessageNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChatMessage
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ChatMessage $event): ChatMessageNotification
    {
        return new ChatMessageNotification($event->chat);
    }
}
