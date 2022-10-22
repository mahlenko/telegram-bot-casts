<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to move a sticker in a set created by the bot to a
 * specific position. Returns True on success.
 */
class SetStickerPositionInSet extends BaseMethod implements StickersInterface
{
	/** File identifier of the sticker */
	public string $sticker;

	/** New sticker position in the set, zero-based */
	public int $position;
}
