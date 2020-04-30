<?php

namespace App\Containers\User\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateAdminRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserRequest extends Request
{

	/**
	 * Define which Roles and/or Permissions has access to this request.
	 *
	 * @var  array
	 */
	protected $access = [
		'permissions' => 'create-admins',
		'roles' => '',
	];

	/**
	 * Id's that needs decoding before applying the validation rules.
	 *
	 * @var  array
	 */
	protected $decode = [

	];

	/**
	 * Defining the URL parameters (`/stores/999/items`) allows applying
	 * validation rules on them and allows accessing them like request data.
	 *
	 * @var  array
	 */
	protected $urlParameters = [

	];

	/**
	 * @return  array
	 */
	public function rules()
	{
		return [
			'username' => 'required|max:40|unique:users',
			'realname' => 'required|min:3|max:30',
			'password' => 'required|min:3|max:30',
			'phonenumber' =>'required|min:10|max:15',
			'address_id' => 'required|numeric',
			'activated' => 'required|bool',
			'roles' => 'required|array',
		];
	}

	/**
	 * @return  bool
	 */
	public function authorize()
	{
		return $this->check([
			'hasAccess',
		]);
	}
}
