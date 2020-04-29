<?php

namespace App\Containers\Station\Models;

use App\Containers\Address\Models\Address;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Station extends Model
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
    protected $resourceKey = 'stations';

	public function address()
	{
		return $this->hasOne(Address::class, 'id', 'address_id');
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
}
