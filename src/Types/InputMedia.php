<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\Interface\TypesInterface;
use TelegramBot\TelegramType;

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
 * Bot API 6.9
 * Sergey Makhlenko <https://github.com/mahlenko>
 */
class InputMedia extends TelegramType implements TypesInterface
{
}
