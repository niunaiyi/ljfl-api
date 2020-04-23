<?php

namespace App\Containers\Customer\Models;

use App\Containers\Address\Models\Address;
use App\Ship\Parents\Models\Model;

class Customer extends Model
{
	protected $fillable = [

	];

	protected $attributes = [

	];

	protected $hidden = [

	];

	protected $dates = [
		'created_at',
		'updated_at',
	];

	/**
	 * A resource key to be used by the the JSON API Serializer responses.
	 */
	protected $resourceKey = 'customers';


	public function addresses()
	{
		return $this->belongsToMany(Address::class, 'customer_address', 'customer_id', 'address_id');
	}
}
