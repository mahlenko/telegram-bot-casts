<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to delete a sticker from a set created by the bot.
 * Returns True on success.
 */
class DeleteStickerFromSet extends BaseMethod implements StickersInterface
{
	/** File identifier of the sticker */
	public string $sticker;
}
