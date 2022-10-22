<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\InlineModeInterface;

/**
 * Represents a link to an animated GIF file. By default, this animated
 * GIF file will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message
 * with the specified content instead of the animation.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InlineQueryResultGif extends BaseType implements InlineModeInterface
{
    /** Type of the result, must be gif */
    public string $type;

    /** Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** A valid URL for the GIF file. File size must not exceed 1MB */
    public string $gif_url;

    /** Optional. Width of the GIF */
    public ?int $gif_width;

    /** Optional. Height of the GIF */
    public ?int $gif_height;

    /** Optional. Duration of the GIF in seconds */
    public ?int $gif_duration;

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the
     * result
     */
    public string $thumb_url;

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”,
     * “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
     */
    public ?string $thumb_mime_type;

    /** Optional. Title for the result */
    public ?string $title;

    /**
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after
     * entities parsing
     */
    public ?string $caption;

    /**
     * Optional. Mode for parsing entities in the caption. See formatting
     * options for more details.
     */
    public ?string $parse_mode;

    /**
     * Optional. List of special entities that appear in the caption, which
     * can be specified instead of parse_mode
     *
     * @var array<MessageEntity>
     */
    public ?array $caption_entities;

    /** Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup;

    /**
     * Optional. Content of the message to be sent instead of the GIF
     * animation
     */
    public ?InputMessageContent $input_message_content;
}
