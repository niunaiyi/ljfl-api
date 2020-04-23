<?php

namespace App\Containers\User\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateUserRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserRequest extends Request
{

	/**
	 * Define which Roles and/or Permissions has access to this request.
	 *
	 * @var  array
	 */
	protected $access = [
		'permissions' => 'update-users',
		'roles' => '',
	];

	/**
	 * Id's that needs decoding before applying the validation rules.
	 *
	 * @var  array
	 */
	protected $decode = [
		//'id',
	];

	/**
	 * Defining the URL parameters (`/stores/999/items`) allows applying
	 * validation rules on them and allows accessing them like request data.
	 *
	 * @var  array
	 */
	protected $urlParameters = [
		'id',
	];

	/**
	 * @return  array
	 */
	public function rules()
	{
		return [
			'username' => 'string|unique:users|min:6|max:20',
			'realname' => 'string|min:6|max:10',
			'password' => 'string|min:6|max:10',
			'phonenumber' => 'string|unique:users',
			'address_id' => 'numeric',
			'roles' => 'array',
		];
	}

	/**
	 * @return  bool
	 */
	public function authorize()
	{
		// is this an admin who has access to permission `update-users`
		// or the user is updating his own object (is the owner).

		return $this->check([
			'hasAccess|isOwner',
		]);
	}
}
