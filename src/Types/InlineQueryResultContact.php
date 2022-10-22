<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents a contact with a phone number. By default, this contact
 * will be sent by the user. Alternatively, you can use
 * input_message_content to send a message with the specified content
 * instead of the contact.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultContact extends BaseType implements InlineModeInterface
{
    /** Type of the result, must be contact */
    public string $type;

    /** Unique identifier for this result, 1-64 Bytes */
    public string $id;

    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** Optional. Contact's last name */
    public ?string $last_name;

    /**
     * Optional. Additional data about the contact in the form of a vCard,
     * 0-2048 bytes
     */
    public ?string $vcard;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /** Optional. Content of the message to be sent instead of the contact */
    public ?InputMessageContent $input_message_content;

    /** Optional. Url of the thumbnail for the result */
    public ?string $thumb_url;

    /** Optional. Thumbnail width */
    public ?int $thumb_width;

    /** Optional. Thumbnail height */
    public ?int $thumb_height;
}
