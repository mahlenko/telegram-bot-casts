<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\TelegramType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a phone contact.
 *
 * Bot API 6.8
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class Contact extends TelegramType implements TypesInterface
{
    /** Contact's phone number */
    public string $phone_number;

    /** Contact's first name */
    public string $first_name;

    /** Optional. Contact's last name */
    public ?string $last_name;

    /**
     * Optional. Contact's user identifier in Telegram. This number may have
     * more than 32 significant bits and some programming languages may have
     * difficulty/silent defects in interpreting it. But it has at most 52
     * significant bits, so a 64-bit integer or double-precision float type
     * are safe for storing this identifier.
     */
    public ?int $user_id;

    /** Optional. Additional data about the contact in the form of a vCard */
    public ?string $vcard;
}
