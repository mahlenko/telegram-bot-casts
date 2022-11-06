<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents the content of a media message to be sent. It
 * should be one of
 *
 * InputMediaAnimation
 * InputMediaDocument
 * InputMediaAudio
 * InputMediaPhoto
 * InputMediaVideo
 *
 * Bot API 6.3
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputMedia extends BaseType implements TypesInterface
{
}
