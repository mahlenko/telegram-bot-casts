<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represent a user's profile pictures.
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class UserProfilePhotos extends BaseType implements TypesInterface
{
    /** Total number of profile pictures the target user has */
    public int $total_count;

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @var array<array>
     */
    public array $photos;
}
