<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents an inline keyboard that appears right next to
 * the message it belongs to.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineKeyboardMarkup extends BaseType implements TypesInterface
{
    /**
     * Array of button rows, each represented by an Array of
     * InlineKeyboardButton objects
     */
    public array $inline_keyboard;
}
