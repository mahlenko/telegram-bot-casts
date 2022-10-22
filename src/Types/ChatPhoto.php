<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a chat photo.
 */
class ChatPhoto extends BaseType implements TypesInterface
{
	/**
	 * File identifier of small (160x160) chat photo. This file_id can be
	 * used only for photo download and only for as long as the photo is not
	 * changed.
	 */
	public string $small_file_id;

	/**
	 * Unique file identifier of small (160x160) chat photo, which is
	 * supposed to be the same over time and for different bots. Can't be
	 * used to download or reuse the file.
	 */
	public string $small_file_unique_id;

	/**
	 * File identifier of big (640x640) chat photo. This file_id can be used
	 * only for photo download and only for as long as the photo is not
	 * changed.
	 */
	public string $big_file_id;

	/**
	 * Unique file identifier of big (640x640) chat photo, which is supposed
	 * to be the same over time and for different bots. Can't be used to
	 * download or reuse the file.
	 */
	public string $big_file_unique_id;
}
