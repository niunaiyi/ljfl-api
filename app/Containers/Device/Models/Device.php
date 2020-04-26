<?php

namespace App\Containers\Device\Models;

use App\Containers\Address\Models\Address;
use App\Containers\Customer\Data\Seeders\CustomersTableSeeder;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Device extends Model
{
	protected $fillable = [
		'name',
		'sblx_value',
		'sbxh_value',
		'address_id',
		'position',
		'user_id',
	];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'devices';

	public function address()
	{
		return $this->hasOne(Address::class, 'id', 'address_id');
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}

}
