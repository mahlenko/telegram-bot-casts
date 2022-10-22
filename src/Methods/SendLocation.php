<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send point on the map. On success, the sent Message
 * is returned.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendLocation extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /** Latitude of the location */
    public float $latitude;

    /** Longitude of the location */
    public float $longitude;

    /** The radius of uncertainty for the location, measured in meters; 0-1500 */
    public ?float $horizontal_accuracy;

    /**
     * Period in seconds for which the location will be updated (see Live
     * Locations, should be between 60 and 86400.
     */
    public ?int $live_period;

    /**
     * For live locations, a direction in which the user is moving, in
     * degrees. Must be between 1 and 360 if specified.
     */
    public ?int $heading;

    /**
     * For live locations, a maximum distance for proximity alerts about
     * approaching another chat member, in meters. Must be between 1 and
     * 100000 if specified.
     */
    public ?int $proximity_alert_radius;

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
