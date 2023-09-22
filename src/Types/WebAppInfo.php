<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

/**
 * Describes a Web App.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class WebAppInfo extends TelegramType implements TypesInterface
{
    /**
     * An HTTPS URL of a Web App to be opened with additional data as
     * specified in Initializing Web Apps
     */
    public string $url;
}
