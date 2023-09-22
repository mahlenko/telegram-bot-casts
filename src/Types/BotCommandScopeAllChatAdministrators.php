<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents the scope of bot commands, covering all group and
 * supergroup chat administrators.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllChatAdministrators extends TelegramType implements TypesInterface
{
    /** Scope type, must be all_chat_administrators */
    public string $type;
}
