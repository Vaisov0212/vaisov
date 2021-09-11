<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\chat;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if($message =='hello'){
                $this->bb($botman);
            }
            else if ($message == 'hi') {
                $this->askName($botman);

            }else{
                $botman->reply("write 'hi' for testing...");
            }

        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
        public function bb($botman){
        $botman->ask('Yaxshi oydin o`zing nichiksan', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('tushunmadikqu');

        });

    }

    public function ChatBot($bootman){
        $respond=Chat::where('question','==', $bootman)->InrandomOrder(1)->get();
        $respond->toArray();


    }

}
