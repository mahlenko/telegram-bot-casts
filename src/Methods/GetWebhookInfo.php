<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\TelegramMethod;
use TelegramBot\Interface\UpdatesInterface;

/**
 * Use this method to get current webhook status. Requires no parameters.
 * On success, returns a WebhookInfo object. If the bot is using
 * getUpdates, will return an object with the url field empty.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetWebhookInfo extends TelegramMethod implements UpdatesInterface
{
    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}
