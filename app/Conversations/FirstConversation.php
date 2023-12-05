<?php

namespace App\Conversations;

use App\Models\Dialog;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class FirstConversation extends Conversation
{
    public function run()
    {
        $dialog = Dialog::where('question',request()->message)->first();

        $this->bot->reply('test test test');
        $this->bot->reply($dialog->answer);
        if($dialog->image)
        {
            $this->bot->reply('<img src="'.asset($dialog->image).'" style="width:100px; height:100px;"/>');
        }
        if($dialog->video)
        {
            $this->bot->reply('<iframe width="150" height="150"
            src="https://www.youtube.com/embed/'.$dialog->video.'" allowfullscreen>
            </iframe>');
        }
    }
}
