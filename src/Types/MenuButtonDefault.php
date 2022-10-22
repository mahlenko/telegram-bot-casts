<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * Describes that no specific value for the menu button was set.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MenuButtonDefault extends BaseType implements TypesInterface
{
    /** Type of the button, must be default */
    public string $type;
}
