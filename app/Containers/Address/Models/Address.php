<?php

namespace App\Containers\Address\Models;

use App\Ship\Parents\Models\Model;

class Address extends Model
{
	protected $fillable = ['name', 'dzlx_value', 'hylx_value', 'position', 'parent_name'];

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
	protected $resourceKey = 'addresses';

	public function children()
	{
		return Address::whereRaw('parent_name ~ \'' . $this->parent_name . '.*{1}\'');
	}

	public function parent()
	{
		return Address::whereRaw('parent_name = subpath(\'' . $this->parent_name . '\', 0, -1) ');
	}
}
