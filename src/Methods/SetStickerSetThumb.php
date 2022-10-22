<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;
use TelegramBot\Types\InputFile;

/**
 * Use this method to set the thumbnail of a sticker set. Animated
 * thumbnails can be set for animated sticker sets only. Video thumbnails
 * can be set only for video sticker sets only. Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetStickerSetThumb extends BaseMethod implements StickersInterface
{
	/** Sticker set name */
	public string $name;

	/** User identifier of the sticker set owner */
	public int $user_id;

	/**
	 * A PNG image with the thumbnail, must be up to 128 kilobytes in size
	 * and have width and height exactly 100px, or a TGS animation with the
	 * thumbnail up to 32 kilobytes in size; see
	 * https://core.telegram.org/stickers#animated-sticker-requirements for
	 * animated sticker technical requirements, or a WEBM video with the
	 * thumbnail up to 32 kilobytes in size; see
	 * https://core.telegram.org/stickers#video-sticker-requirements for
	 * video sticker technical requirements. Pass a file_id as a String to
	 * send a file that already exists on the Telegram servers, pass an HTTP
	 * URL as a String for Telegram to get a file from the Internet, or
	 * upload a new one using multipart/form-data. More information on
	 * Sending Files ». Animated sticker set thumbnails can't be uploaded
	 * via HTTP URL.
	 */
	public InputFile|string|null $thumb;
}
