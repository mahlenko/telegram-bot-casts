<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents an inline keyboard that appears right next to
 * the message it belongs to.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineKeyboardMarkup extends TelegramType implements TypesInterface
{
    /**
     * Array of button rows, each represented by an Array of
     * InlineKeyboardButton objects
     *
     * @var array<array>
     */
    public array $inline_keyboard;
}
