<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\MenuButtonInterface;
use TelegramBot\TelegramType;

/**
 * Represents a menu button, which opens the bot's list of commands.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MenuButtonCommands extends TelegramType implements MenuButtonInterface
{
    /** Type of the button, must be commands */
    public string $type;
}
