<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Represents the scope of bot commands, covering all group and
 * supergroup chats.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllGroupChats extends TelegramType implements TypesInterface
{
    /** Scope type, must be all_group_chats */
    public string $type;
}
