<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents the scope of bot commands, covering all administrators of a
 * specific group or supergroup chat.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeChatAdministrators extends TelegramType implements TypesInterface
{
    /** Scope type, must be chat_administrators */
    public string $type;

    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;
}
