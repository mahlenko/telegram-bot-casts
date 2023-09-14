<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\TelegramMethod;
use TelegramBot\Interface\UpdatesInterface;

/**
 * Use this method to remove webhook integration if you decide to switch
 * back to getUpdates. Returns True on success.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class DeleteWebhook extends TelegramMethod implements UpdatesInterface
{
    /** Pass True to drop all pending updates */
    public ?bool $drop_pending_updates;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}
