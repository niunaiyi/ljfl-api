<?php

namespace App\Containers\Address\UI\API\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class CreateAddressRequest.
 */
class CreateAddressRequest extends Request
{

	/**
	 * The assigned Transporter for this Request
	 *
	 * @var string
	 */
	protected $transporter = \App\Containers\Address\Data\Transporters\CreateAddressTransporter::class;

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
			'name' => ['required', 'string', 'max:20'],
			'dzlx_value' => ['required', 'numeric'],
			'hylx_value' => ['required', 'numeric'],
			'parent_id' => ['required', 'numeric', 'exists:App\Containers\Address\Models\Address,id'],
			'position' => ['required', 'array'],
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
