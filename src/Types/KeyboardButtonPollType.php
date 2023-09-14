<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents type of a poll, which is allowed to be created
 * and sent when the corresponding button is pressed.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class KeyboardButtonPollType extends TelegramType implements TypesInterface
{
    /**
     * Optional. If quiz is passed, the user will be allowed to create only
     * polls in the quiz mode. If regular is passed, only regular polls will
     * be allowed. Otherwise, the user will be allowed to create a poll of
     * any type.
     */
    public ?string $type;
}
