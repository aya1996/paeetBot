<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Models\NotFound;
use App\Models\About;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\optionsConversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\Image;


class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {


                $botman = app('botman');
                $botman->hears('{message}', function($botman, $message) {

                    $faqs = FAQ::get();
                    if($faqs->count() > 0)
                    {
                        foreach($faqs as $key => $faq)
                        {
                            if ($message == $faq->question) {
                                $botman->reply($faq->answer);
                                if($faq->image)
                                {
                                    $botman->reply('<img src="'.asset($faq->image).'" style="width:100px; height:100px;"/>');
                                }
                                if($faq->video)
                                {
                                    $botman->reply('<iframe width="150" height="150"
                                    src="https://www.youtube.com/embed/'.$faq->video.'" allowfullscreen>
                                    </iframe>');
                                }
                                break;
                                // $this->askName($botman);
                            }
                            if( $key == (count($faqs) -1)){
                                $not_found = new NotFound;
                                $not_found->title = $message;
                                $not_found->save();

                                $botman->reply("لا يمكننا فهم طلبك قم بالتواصل معنا بالذهاب الي اتصل بنا وارسل رسالتك ");
                                break;
                            }
                        }
                    }

                    if(About::first()->dialog == 1)
                    {
                        $this->startConversation($botman);
                    }


                });

                $botman->listen();

        // $botman->hears('{message}', function($botman, $message) {

        //     if ($message == 'hi') {
        //         $this->askName($botman);
        //     }else{
        //         $botman->reply("write 'hiddsds' for testing...");
        //         // $this->startConversation($botman);
        //     }

        // });

        // $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    // public function askName($botman)
    // {
    //     $botman->ask('Hello! What is your Name?', function(Answer $answer) {

    //         $name = $answer->getText();

    //         $this->say('Nice to meet you '.$name);
    //     });
    // }


    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new optionsConversation());
    }
}
