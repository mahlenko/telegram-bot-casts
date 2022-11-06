<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get information about a member of a chat. Returns a
 * ChatMember object on success.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetChatMember extends BaseMethod implements MethodsInterface
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
