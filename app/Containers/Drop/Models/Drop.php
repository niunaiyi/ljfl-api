<?php

namespace App\Containers\Drop\Models;

use App\Containers\Customer\Models\Customer;
use App\Containers\Device\Models\Device;
use App\Containers\Dict\Models\Dict;
use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Drop extends Model
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
    protected $resourceKey = 'drops';

	public function customer()
	{
		return $this->hasOne(Customer::class, 'id', 'customer_id');
	}

	public function user()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}

	public function device()
	{
		return $this->hasOne(Device::class, 'id', 'device_id');
	}

	public function ljlx()
	{
		return $this->hasOne(Dict::class, 'value', 'ljlx_value');
	}

	public function ljxl()
	{
		return $this->hasOne(Dict::class, 'value', 'ljxl_value');
	}

	public function jlbz()
	{
		return $this->hasOne(Dict::class, 'value', 'jlbz_value');
	}
}
