<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents a Game.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultGame extends BaseType implements InlineModeInterface
{
    /** Type of the result, must be game */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** Short name of the game */
    public string $game_short_name;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;
}
