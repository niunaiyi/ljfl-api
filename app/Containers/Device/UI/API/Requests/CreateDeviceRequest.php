<?php

namespace App\Containers\Device\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateDeviceRequest.
 */
class CreateDeviceRequest extends Request
{

	/**
	 * The assigned Transporter for this Request
	 *
	 * @var string
	 */
	protected $transporter = \App\Containers\Device\Data\Transporters\CreateDeviceTransporter::class;

	/**
	 * Define which Roles and/or Permissions has access to this request.
	 *
	 * @var  array
	 */
	protected $access = [
		'permissions' => '',
		'roles' => '',
	];

	/**
	 * Id's that needs decoding before applying the validation rules.
	 *
	 * @var  array
	 */
	protected $decode = [
		// 'id',
	];

	/**
	 * Defining the URL parameters (e.g, `/user/{id}`) allows applying
	 * validation rules on them and allows accessing them like request data.
	 *
	 * @var  array
	 */
	protected $urlParameters = [
		// 'id',
	];

	/**
	 * @return  array
	 */
	public function rules()
	{
		return [
			'name' => ['required', 'string', 'min:2', 'max:20'],
			'sblx_value' => ['required', 'numeric'],
			'sbxh_value' => ['required', 'numeric'],
			'position' => ['required', 'array'],
			'user_id' => ['required', 'numeric'],
			'address_id' => ['required', 'numeric'],
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
