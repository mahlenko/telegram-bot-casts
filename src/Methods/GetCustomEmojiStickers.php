<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;

/**
 * Use this method to get information about custom emoji stickers by
 * their identifiers. Returns an Array of Sticker objects.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class GetCustomEmojiStickers extends BaseMethod implements StickersInterface
{
	/**
	 * List of custom emoji identifiers. At most 200 custom emoji identifiers
	 * can be specified.
	 */
	public array $custom_emoji_ids;
}
