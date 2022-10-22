<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to copy messages of any kind. Service messages and
 * invoice messages can't be copied. A quiz poll can be copied only if
 * the value of the field correct_option_id is known to the bot. The
 * method is analogous to the method forwardMessage, but the copied
 * message doesn't have a link to the original message. Returns the
 * MessageId of the sent message on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class CopyMessage extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * channel (in the format @channelusername)
	 */
	public int|string $chat_id;

	/**
	 * Unique identifier for the chat where the original message was sent (or
	 * channel username in the format @channelusername)
	 */
	public int|string $from_chat_id;

	/** Message identifier in the chat specified in from_chat_id */
	public int $message_id;

	/**
	 * New caption for media, 0-1024 characters after entities parsing. If
	 * not specified, the original caption is kept
	 */
	public ?string $caption;

	/**
	 * Mode for parsing entities in the new caption. See formatting options
	 * for more details.
	 */
	public ?string $parse_mode;

	/**
	 * A JSON-serialized list of special entities that appear in the new
	 * caption, which can be specified instead of parse_mode
	 */
	public ?array $caption_entities;

	/**
	 * Sends the message silently. Users will receive a notification with no
	 * sound.
	 */
	public ?bool $disable_notification;

	/** Protects the contents of the sent message from forwarding and saving */
	public ?bool $protect_content;

	/** If the message is a reply, ID of the original message */
	public ?int $reply_to_message_id;

	/**
	 * Pass True if the message should be sent even if the specified
	 * replied-to message is not found
	 */
	public ?bool $allow_sending_without_reply;

	/**
	 * Additional interface options. A JSON-serialized object for an inline
	 * keyboard, custom reply keyboard, instructions to remove reply keyboard
	 * or to force a reply from the user.
	 */
	public InlineKeyboardMarkup|ReplyKeyboardMarkup|null $reply_markup;
}
