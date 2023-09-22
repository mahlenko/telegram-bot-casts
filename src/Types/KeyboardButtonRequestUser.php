<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * This object defines the criteria used to request a suitable user. The
 * identifier of the selected user will be shared with the bot when the
 * corresponding button is pressed. More about requesting users »
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class KeyboardButtonRequestUser extends TelegramType implements TypesInterface
{
    /**
     * Signed 32-bit identifier of the request, which will be received back
     * in the UserShared object. Must be unique within the message
     */
    public int $request_id;

    /**
     * Optional. Pass True to request a bot, pass False to request a regular
     * user. If not specified, no additional restrictions are applied.
     */
    public ?bool $user_is_bot;

    /**
     * Optional. Pass True to request a premium user, pass False to request a
     * non-premium user. If not specified, no additional restrictions are
     * applied.
     */
    public ?bool $user_is_premium;
}
