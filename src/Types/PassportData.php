<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TelegramPassportInterface;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class PassportData extends BaseType implements TelegramPassportInterface
{
    /**
     * Array with information about documents and other Telegram Passport
     * elements that was shared with the bot
     *
     * @var array<EncryptedPassportElement>
     */
    public array $data;

    /** Encrypted credentials required to decrypt the data */
    public EncryptedCredentials $credentials;
}
