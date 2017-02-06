<?php

namespace Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;

class GetMeCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "getUserID";

    /**
     * @var string Command Description
     */
    protected $description = "Get User Id";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $message = $this->getMessage();
        $chat_id = $message->getChat()->getId();
        $this->replyWithMessage(['text' => 'Your user-id:']);
    }
}