<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents a venue. By default, the venue will be sent by the user.
 * Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the venue.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultVenue extends BaseType implements InlineModeInterface
{
    /** Type of the result, must be venue */
    public string $type;

    /** Unique identifier for this result, 1-64 Bytes */
    public string $id;

    /** Latitude of the venue location in degrees */
    public float $latitude;

    /** Longitude of the venue location in degrees */
    public float $longitude;

    /** Title of the venue */
    public string $title;

    /** Address of the venue */
    public string $address;

    /** Optional. Foursquare identifier of the venue if known */
    public ?string $foursquare_id;

    /**
     * Optional. Foursquare type of the venue, if known. (For example,
     * “arts_entertainment/default”, “arts_entertainment/aquarium” or
     * “food/icecream”.)
     */
    public ?string $foursquare_type;

    /** Optional. Google Places identifier of the venue */
    public ?string $google_place_id;

    /** Optional. Google Places type of the venue. (See supported types.) */
    public ?string $google_place_type;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /** Optional. Content of the message to be sent instead of the venue */
    public ?InputMessageContent $input_message_content;

    /** Optional. Url of the thumbnail for the result */
    public ?string $thumb_url;

    /** Optional. Thumbnail width */
    public ?int $thumb_width;

    /** Optional. Thumbnail height */
    public ?int $thumb_height;
}
