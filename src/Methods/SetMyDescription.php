<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\Interface\MethodsInterface;
use TelegramBot\TelegramMethod;

/**
 * Use this method to change the bot's description, which is shown in the
 * chat with the bot if the chat is empty. Returns True on success.
 *
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class SetMyDescription extends TelegramMethod implements MethodsInterface
{
    /**
     * New bot description; 0-512 characters. Pass an empty string to remove
     * the dedicated description for the given language.
     */
    public ?string $description;

    /**
     * A two-letter ISO 639-1 language code. If empty, the description will
     * be applied to all users for whose language there is no dedicated
     * description.
     */
    public ?string $language_code;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = [];
}
