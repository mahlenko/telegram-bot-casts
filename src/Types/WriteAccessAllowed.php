<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a service message about a user allowing a bot
 * to write messages after adding the bot to the attachment menu or
 * launching a Web App from a link.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class WriteAccessAllowed extends TelegramType implements TypesInterface
{
    /** Optional. Name of the Web App which was launched from a link */
    public ?string $web_app_name;
}
