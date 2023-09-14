<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents the scope of bot commands, covering all group and
 * supergroup chats.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotCommandScopeAllGroupChats extends TelegramType implements TypesInterface
{
    /** Scope type, must be all_group_chats */
    public string $type;
}
