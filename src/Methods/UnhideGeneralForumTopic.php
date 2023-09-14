<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\TelegramMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to unhide the 'General' topic in a forum supergroup
 * chat. The bot must be an administrator in the chat for this to work
 * and must have the can_manage_topics administrator rights. Returns True
 * on success.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UnhideGeneralForumTopic extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id'];
}