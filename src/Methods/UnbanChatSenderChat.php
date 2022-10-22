<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to unban a previously banned channel chat in a
 * supergroup or channel. The bot must be an administrator for this to
 * work and must have the appropriate administrator rights. Returns True
 * on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UnbanChatSenderChat extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target sender chat */
    public int $sender_chat_id;
}
