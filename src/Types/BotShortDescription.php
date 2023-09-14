<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents the bot's short description.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class BotShortDescription extends TelegramType implements TypesInterface
{
    /** The bot's short description */
    public string $short_description;
}
