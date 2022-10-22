<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send information about a venue. On success, the
 * sent Message is returned.
 */
class SendVenue extends BaseMethod implements MethodsInterface
{
	/**
	 * Unique identifier for the target chat or username of the target
	 * channel (in the format @channelusername)
	 */
	public int|string $chat_id;

	/** Latitude of the venue */
	public float $latitude;

	/** Longitude of the venue */
	public float $longitude;

	/** Name of the venue */
	public string $title;

	/** Address of the venue */
	public string $address;

	/** Foursquare identifier of the venue */
	public ?string $foursquare_id;

	/**
	 * Foursquare type of the venue, if known. (For example,
	 * “arts_entertainment/default”, “arts_entertainment/aquarium” or
	 * “food/icecream”.)
	 */
	public ?string $foursquare_type;

	/** Google Places identifier of the venue */
	public ?string $google_place_id;

	/** Google Places type of the venue. (See supported types.) */
	public ?string $google_place_type;

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
