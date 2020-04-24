<?php

namespace App\Containers\User\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class UserRepository.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserRepository extends Repository
{

	/**
	 * @var array
	 */
	protected $fieldSearchable = [
		'realname' => 'like',
		'username' => 'like',
		'phonenumber' => 'like',
		'address.parent_name' => 'like',
		'roles.display_name' => 'like',
	];

}
