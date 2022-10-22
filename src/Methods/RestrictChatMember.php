<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;
use TelegramBot\Types\ChatPermissions;

/**
 * Use this method to restrict a user in a supergroup. The bot must be an
 * administrator in the supergroup for this to work and must have the
 * appropriate administrator rights. Pass True for all permissions to
 * lift restrictions from a user. Returns True on success.
 *
 * Bot API 6.2
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class RestrictChatMember extends BaseMethod implements MethodsInterface
{
    /**
     * Unique identifier for the target chat or username of the target
     * supergroup (in the format @supergroupusername)
     */
    public int|string $chat_id;

    /** Unique identifier of the target user */
    public int $user_id;

    /** A JSON-serialized object for new user permissions */
    public ChatPermissions $permissions;

    /**
     * Date when restrictions will be lifted for the user, unix time. If user
     * is restricted for more than 366 days or less than 30 seconds from the
     * current time, they are considered to be restricted forever
     */
    public ?int $until_date;

    /**
     * A list of necessary properties that should be checked before sending
     * requests to the Telegram Bot API
     */
    public array $required_properties = ['chat_id', 'user_id', 'permissions'];
}
