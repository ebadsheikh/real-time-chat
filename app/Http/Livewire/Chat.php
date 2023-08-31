<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\User;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth;

class Chat extends Component
{
    public $receiverId;
    public $message;
    public $newMessage = [];

    public function mount($receiverId): void
    {
        $this->receiverId = $receiverId;
    }

    public function render()
    {
        $user = User::findOrFail($this->receiverId);
        $messages = ChatMessage::where(function($query) {
            $query->where('user_id', Auth::id())
                ->where('receiver_id', $this->receiverId);
        })->orWhere(function($query) {
            $query->where('user_id', $this->receiverId)
                ->where('receiver_id', Auth::id());
        })->get();

        return view('livewire.chat', [
            'user' => $user,
            'messages' => $messages,
        ]);
    }

    public function sendMessage(): void
    {
        try {
            $this->validate([
                'message' => 'required',
            ]);

            ChatMessage::create([
                'user_id' => Auth::id(),
                'receiver_id' => $this->receiverId,
                'message' => $this->message,
            ]);

//            $this->message = '';
            $this->newMessage[] = $this->message;
            $this->message = '';

            event(new MessageSent($this->message));
        } catch (\Exception $e) {
            // Debugging: Log the exception message
            Log::info('Error sending message: ' . $e->getMessage());
        }
    }
}
