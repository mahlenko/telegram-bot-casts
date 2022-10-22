<?php

declare(strict_types=1);

namespace TelegramBot\Types;

use TelegramBot\BaseType;
use TelegramBot\Interface\TypesInterface;

/**
 * This object represents a venue.
 */
class Venue extends BaseType implements TypesInterface
{
	/** Venue location. Can't be a live location */
	public Location $location;

	/** Name of the venue */
	public string $title;

	/** Address of the venue */
	public string $address;

	/** Optional. Foursquare identifier of the venue */
	public ?string $foursquare_id;

	/**
	 * Optional. Foursquare type of the venue. (For example,
	 * “arts_entertainment/default”, “arts_entertainment/aquarium” or
	 * “food/icecream”.)
	 */
	public ?string $foursquare_type;

	/** Optional. Google Places identifier of the venue */
	public ?string $google_place_id;

	/** Optional. Google Places type of the venue. (See supported types.) */
	public ?string $google_place_type;
}
