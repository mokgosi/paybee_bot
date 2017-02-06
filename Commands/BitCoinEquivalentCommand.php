<?php

namespace Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class BitCoinEqivalentCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "getBTCEquivalent";

    /**
     * @var string Command Description
     */
    protected $description = "Get Bit Coin Equivalent of entered amount";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithMessage(['text' => 'Hello! Enter amount:']);
        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $this->replyWithMessage(['text' => $response]);

        $message = $this->getMessage();          
        $chat_id = $message->getChat()->getId();  

        $data = [];                               
        $data['chat_id'] = $chat_id;             
        $data['text'] = ''; 
        return Request::sendMessage($data); 
    }

}