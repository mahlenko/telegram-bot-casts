<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\MaskPosition;

/**
 * Use this method to add a new sticker to a set created by the bot. You
 * must use exactly one of the fields png_sticker, tgs_sticker, or
 * webm_sticker. Animated stickers can be added to animated sticker sets
 * and only to them. Animated sticker sets can have up to 50 stickers.
 * Static sticker sets can have up to 120 stickers. Returns True on
 * success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class AddStickerToSet extends BaseMethod implements StickersInterface
{
	/** User identifier of sticker set owner */
	public int $user_id;

	/** Sticker set name */
	public string $name;

	/**
	 * PNG image with the sticker, must be up to 512 kilobytes in size,
	 * dimensions must not exceed 512px, and either width or height must be
	 * exactly 512px. Pass a file_id as a String to send a file that already
	 * exists on the Telegram servers, pass an HTTP URL as a String for
	 * Telegram to get a file from the Internet, or upload a new one using
	 * multipart/form-data. More information on Sending Files »
	 */
	public InputFile|string|null $png_sticker;

	/**
	 * TGS animation with the sticker, uploaded using multipart/form-data.
	 * See https://core.telegram.org/stickers#animated-sticker-requirements
	 * for technical requirements
	 */
	public ?InputFile $tgs_sticker;

	/**
	 * WEBM video with the sticker, uploaded using multipart/form-data. See
	 * https://core.telegram.org/stickers#video-sticker-requirements for
	 * technical requirements
	 */
	public ?InputFile $webm_sticker;

	/** One or more emoji corresponding to the sticker */
	public string $emojis;

	/**
	 * A JSON-serialized object for position where the mask should be placed
	 * on faces
	 */
	public ?MaskPosition $mask_position;
}
