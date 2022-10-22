<?php

declare(strict_types=1);

namespace TelegramBot\Methods;

use TelegramBot\BaseMethod;
use TelegramBot\Interface\MethodsInterface;

/**
 * Use this method to get a list of profile pictures for a user. Returns
 * a UserProfilePhotos object.
 */
class GetUserProfilePhotos extends BaseMethod implements MethodsInterface
{
	/** Unique identifier of the target user */
	public int $user_id;

	/**
	 * Sequential number of the first photo to be returned. By default, all
	 * photos are returned.
	 */
	public ?int $offset;

	/**
	 * Limits the number of photos to be retrieved. Values between 1-100 are
	 * accepted. Defaults to 100.
	 */
	public ?int $limit;
}
