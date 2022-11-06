<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Represents a menu button, which opens the bot's list of commands.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MenuButtonCommands extends BaseType implements TypesInterface
{
    /** Type of the button, must be commands */
    public string $type;
}
