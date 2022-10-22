<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\UpdatesInterface;

/**
 * Use this method to get current webhook status. Requires no parameters.
 * On success, returns a WebhookInfo object. If the bot is using
 * getUpdates, will return an object with the url field empty.
 */
class GetWebhookInfo extends BaseMethod implements UpdatesInterface
{
}
