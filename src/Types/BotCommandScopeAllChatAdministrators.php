<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the scope of bot commands, covering all group and
 * supergroup chat administrators.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllChatAdministrators extends BaseType implements TypesInterface
{
    /** Scope type, must be all_chat_administrators */
    public string $type;
}
