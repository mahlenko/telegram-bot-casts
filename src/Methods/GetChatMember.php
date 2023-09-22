<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to get information about a member of a chat. The
 * method is only guaranteed to work for other users if the bot is an
 * administrator in the chat. Returns a ChatMember object on success.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetChatMember extends TelegramMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup or channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id'];
}
