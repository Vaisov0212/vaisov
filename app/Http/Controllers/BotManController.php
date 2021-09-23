<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Chat;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function ($bot, $message) {
            $c=Chat::where('question','=',$message)->count();
            
            if($c!=0)
                {
                    $chat=Chat::where('question','=',$message)->inRandomOrder()->get();
            
                     foreach($chat as $item)
                        {
                             $b=$item->respond;
                        }
                        $bot->reply($b);
                }
           else{
               $bot->reply("Kechirasiz men xozirda test rejimida ishlayabman, bu savolga tushunmadim !");
           }
        });
  
        $botman->listen();  
    }
}
  
       

  
