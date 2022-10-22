<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\StickersInterface;

/**
 * This object represents a sticker.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Sticker extends BaseType implements StickersInterface
{
	/**
	 * Identifier for this file, which can be used to download or reuse the
	 * file
	 */
	public string $file_id;

	/**
	 * Unique identifier for this file, which is supposed to be the same over
	 * time and for different bots. Can't be used to download or reuse the
	 * file.
	 */
	public string $file_unique_id;

	/**
	 * Type of the sticker, currently one of “regular”, “mask”,
	 * “custom_emoji”. The type of the sticker is independent from its
	 * format, which is determined by the fields is_animated and is_video.
	 */
	public string $type;

	/** Sticker width */
	public int $width;

	/** Sticker height */
	public int $height;

	/** True, if the sticker is animated */
	public bool $is_animated;

	/** True, if the sticker is a video sticker */
	public bool $is_video;

	/** Optional. Sticker thumbnail in the .WEBP or .JPG format */
	public ?PhotoSize $thumb;

	/** Optional. Emoji associated with the sticker */
	public ?string $emoji;

	/** Optional. Name of the sticker set to which the sticker belongs */
	public ?string $set_name;

	/**
	 * Optional. For premium regular stickers, premium animation for the
	 * sticker
	 */
	public ?File $premium_animation;

	/**
	 * Optional. For mask stickers, the position where the mask should be
	 * placed
	 */
	public ?MaskPosition $mask_position;

	/**
	 * Optional. For custom emoji stickers, unique identifier of the custom
	 * emoji
	 */
	public ?string $custom_emoji_id;

	/** Optional. File size in bytes */
	public ?int $file_size;
}
