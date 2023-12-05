<?php

namespace App\Conversations;


use App\Models\Dialog;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\FirstConversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;



class optionsConversation extends Conversation
{
    // protected $firstname;

    // protected $email;

    // public function askFirstname()
    // {
    //     $this->ask('Hello! What is your firstname?', function(Answer $answer) {
    //         // Save result
    //         $this->firstname = $answer->getText();

    //         $this->say('Nice to meet you '.$this->firstname);
    //         $this->askEmail();
    //     });
    // }

    // public function askEmail()
    // {
    //     $this->ask('One more thing - what is your email?', function(Answer $answer) {
    //         // Save result
    //         $this->email = $answer->getText();

    //         $this->say('Great - that is all we need, '.$this->firstname);
    //     });
    // }

    public function run()
    {
        $dialogs = Dialog::get()->pluck('question', 'answer')->toArray();

        $buttonArray = [];

        foreach ($dialogs as $id => $value) {
            $button = Button::create($value)->value($id);
            $buttonArray[] = $button;
        }

        $question = Question::create('اخبرنا ماذا تريد ؟')
        ->fallback('غير قادر علي اي اختيار ')
        ->callbackId('فضلا قم باختيار ما تريد')
        ->addButtons($buttonArray);


        $this->bot->ask($question, function (Answer $answer) {

            if ($answer->isInteractiveMessageReply()) {
                $value = $answer->getValue();
                $this->bot->startConversation(new FirstConversation());
                // switch ($value)
                // {
                //     case 'val1':
                //         break;
                //     case 'val2':
                //         $this->bot->startConversation(new FirstConversation());
                //         break;
                //     case 'val3':
                //         $this->bot->startConversation(new FirstConversation());
                //         break;
                // }
            }
        });
    }
}
