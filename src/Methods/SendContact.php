<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send phone contacts. On success, the sent Message
 * is returned.
 */
class SendContact extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * channel (in the format @channelusername)
	 */
	public int|string $chat_id;

	/** Contact's phone number */
	public string $phone_number;

	/** Contact's first name */
	public string $first_name;

	/** Contact's last name */
	public ?string $last_name;

	/** Additional data about the contact in the form of a vCard, 0-2048 bytes */
	public ?string $vcard;

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
