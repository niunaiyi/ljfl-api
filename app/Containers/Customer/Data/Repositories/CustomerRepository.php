<?php

namespace App\Containers\Customer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CustomerRepository
 */
class CustomerRepository extends Repository
{

	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'nickname' => 'like',
		'realname' => 'like',
		'phonenumber' => 'like',
		'addresses.name' => 'like',
		'addresses.parent_name' => 'like',
	];

}
