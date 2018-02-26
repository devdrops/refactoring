<?php

namespace Longman\TelegramBot\Commands\UserCommands;

use Longman\TelegramBot\Commands\UserCommand;

class WatCommand extends UserCommand
{
    private $name = 'wat';
    private $description = 'Test command.';
    private $usage = '/wat';
    private $version = '1.0.0';

	public function doSomething()
	{
		return false;
	}

    public function execute()
    {
        $message = $this->getMessage();

        $chatId = $message->getChat()->getId();

        $data = [
            'chat_id' => $chatId,
            'text' => 'Ay Caramba!'
        ];

        return \Longman\TelegramBot\Request::sendMessage($data);
    }
}
