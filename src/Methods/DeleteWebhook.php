<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\UpdatesInterface;

/**
 * Use this method to remove webhook integration if you decide to switch
 * back to getUpdates. Returns True on success.
 */
class DeleteWebhook extends BaseMethod implements UpdatesInterface
{
	/** Pass True to drop all pending updates */
	public ?bool $drop_pending_updates;
}
