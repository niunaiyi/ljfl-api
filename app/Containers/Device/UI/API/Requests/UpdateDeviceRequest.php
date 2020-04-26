<?php

namespace App\Containers\Device\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateDeviceRequest.
 */
class UpdateDeviceRequest extends Request
{

	/**
	 * The assigned Transporter for this Request
	 *
	 * @var string
	 */
	protected $transporter = \App\Containers\Device\Data\Transporters\UpdateDeviceTransporter::class;

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
		'id',
	];

	/**
	 * @return  array
	 */
	public function rules()
	{
		return [
			'id' => 'required|exists:devices,id',
			'name' => 'string| min:4| max:20',
			'sblx_value' => 'numeric|exists:dicts,value',
			'sbxh_value' => 'numeric',
			'address_id' => 'numeric|exists:addresses,id',
			'user_id' => 'numeric|exists:users,id',
			'position' => 'array',
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
