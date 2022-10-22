<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\ReplyKeyboardMarkup;

/**
 * Use this method to send photos. On success, the sent Message is
 * returned.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SendPhoto extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * channel (in the format @channelusername)
     */
    public int|string $chat_id;

    /**
     * Photo to send. Pass a file_id as String to send a photo that exists on
     * the Telegram servers (recommended), pass an HTTP URL as a String for
     * Telegram to get a photo from the Internet, or upload a new photo using
     * multipart/form-data. The photo must be at most 10 MB in size. The
     * photo's width and height must not exceed 10000 in total. Width and
     * height ratio must be at most 20. More information on Sending Files »
     */
    public InputFile|string $photo;

    /**
     * Photo caption (may also be used when resending photos by file_id),
     * 0-1024 characters after entities parsing
     */
    public ?string $caption;

    /**
     * Mode for parsing entities in the photo caption. See formatting options
     * for more details.
     */
    public ?string $parse_mode;

    /**
     * A JSON-serialized list of special entities that appear in the caption,
     * which can be specified instead of parse_mode
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

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'photo'];
}
