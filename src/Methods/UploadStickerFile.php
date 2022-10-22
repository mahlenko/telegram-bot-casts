<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;
use TelegramBot\Types\InputFile;

/**
 * Use this method to upload a .PNG file with a sticker for later use in
 * createNewStickerSet and addStickerToSet methods (can be used multiple
 * times). Returns the uploaded File on success.
 */
class UploadStickerFile extends BaseMethod implements StickersInterface
{
	/** User identifier of sticker file owner */
	public int $user_id;

	/**
	 * PNG image with the sticker, must be up to 512 kilobytes in size,
	 * dimensions must not exceed 512px, and either width or height must be
	 * exactly 512px. More information on Sending Files »
	 */
	public InputFile $png_sticker;
}
