<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents a link to a photo stored on the Telegram servers. By
 * default, this photo will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the photo.
 */
class InlineQueryResultCachedPhoto extends BaseType implements InlineModeInterface
{
	/** Type of the result, must be photo */
	public string $type;

	/** Unique identifier for this result, 1-64 bytes */
	public string $id;

	/** A valid file identifier of the photo */
	public string $photo_file_id;

	/** Optional. Title for the result */
	public ?string $title;

	/** Optional. Short description of the result */
	public ?string $description;

	/**
	 * Optional. Caption of the photo to be sent, 0-1024 characters after
	 * entities parsing
	 */
	public ?string $caption;

	/**
	 * Optional. Mode for parsing entities in the photo caption. See
	 * formatting options for more details.
	 */
	public ?string $parse_mode;

	/**
	 * Optional. List of special entities that appear in the caption, which
	 * can be specified instead of parse_mode
	 */
	public ?array $caption_entities;

	/** Optional. Inline keyboard attached to the message */
	public ?InlineKeyboardMarkup $reply_markup;

	/** Optional. Content of the message to be sent instead of the photo */
	public ?InputMessageContent $input_message_content;
}
