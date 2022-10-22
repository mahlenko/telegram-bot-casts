<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\StickersInterface;
use TelegramBot\Types\InputFile;
use TelegramBot\Types\MaskPosition;

/**
 * Use this method to create a new sticker set owned by a user. The bot
 * will be able to edit the sticker set thus created. You must use
 * exactly one of the fields png_sticker, tgs_sticker, or webm_sticker.
 * Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class CreateNewStickerSet extends BaseMethod implements StickersInterface
{
    /** User identifier of created sticker set owner */
    public int $user_id;

    /**
     * Short name of sticker set, to be used in t.me/addstickers/ URLs (e.g.,
     * animals). Can contain only English letters, digits and underscores.
     * Must begin with a letter, can't contain consecutive underscores and
     * must end in "_by_<bot_username>". <bot_username> is case insensitive.
     * 1-64 characters.
     */
    public string $name;

    /** Sticker set title, 1-64 characters */
    public string $title;

    /**
     * PNG image with the sticker, must be up to 512 kilobytes in size,
     * dimensions must not exceed 512px, and either width or height must be
     * exactly 512px. Pass a file_id as a String to send a file that already
     * exists on the Telegram servers, pass an HTTP URL as a String for
     * Telegram to get a file from the Internet, or upload a new one using
     * multipart/form-data. More information on Sending Files »
     */
    public InputFile|string|null $png_sticker;

    /**
     * TGS animation with the sticker, uploaded using multipart/form-data.
     * See https://core.telegram.org/stickers#animated-sticker-requirements
     * for technical requirements
     */
    public ?InputFile $tgs_sticker;

    /**
     * WEBM video with the sticker, uploaded using multipart/form-data. See
     * https://core.telegram.org/stickers#video-sticker-requirements for
     * technical requirements
     */
    public ?InputFile $webm_sticker;

    /**
     * Type of stickers in the set, pass “regular” or “mask”. Custom
     * emoji sticker sets can't be created via the Bot API at the moment. By
     * default, a regular sticker set is created.
     */
    public ?string $sticker_type;

    /** One or more emoji corresponding to the sticker */
    public string $emojis;

    /**
     * A JSON-serialized object for position where the mask should be placed
     * on faces
     */
    public ?MaskPosition $mask_position;
}
