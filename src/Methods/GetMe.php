<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * A simple method for testing your bot's authentication token. Requires
 * no parameters. Returns basic information about the bot in form of a
 * User object.
 */
class GetMe extends BaseMethod implements MethodsInterface
{
}
