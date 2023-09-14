<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents one special entity in a text message. For
 * example, hashtags, usernames, URLs, etc.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class MessageEntity extends TelegramType implements TypesInterface
{
    /**
     * Type of the entity. Currently, can be “mention” (@username),
     * “hashtag” (#hashtag), “cashtag” ($USD), “bot_command”
     * (/start@jobs_bot), “url” (https://telegram.org), “email”
     * (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123),
     * “bold” (bold text), “italic” (italic text), “underline”
     * (underlined text), “strikethrough” (strikethrough text),
     * “spoiler” (spoiler message), “code” (monowidth string),
     * “pre” (monowidth block), “text_link” (for clickable text
     * URLs), “text_mention” (for users without usernames),
     * “custom_emoji” (for inline custom emoji stickers)
     */
    public string $type;

    /** Offset in UTF-16 code units to the start of the entity */
    public int $offset;

    /** Length of the entity in UTF-16 code units */
    public int $length;

    /**
     * Optional. For “text_link” only, URL that will be opened after user
     * taps on the text
     */
    public ?string $url;

    /** Optional. For “text_mention” only, the mentioned user */
    public ?User $user;

    /**
     * Optional. For “pre” only, the programming language of the entity
     * text
     */
    public ?string $language;

    /**
     * Optional. For “custom_emoji” only, unique identifier of the custom
     * emoji. Use getCustomEmojiStickers to get full information about the
     * sticker
     */
    public ?string $custom_emoji_id;
}
