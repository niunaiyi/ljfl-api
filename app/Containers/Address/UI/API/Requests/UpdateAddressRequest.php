<?php

namespace App\Containers\Address\UI\API\Requests;

use App\Containers\Address\Data\Transporters\UpdateAddressTransporter;
use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateAddressRequest.
 */
class UpdateAddressRequest extends Request
{

	/**
	 * The assigned Transporter for this Request
	 *
	 * @var string
	 */
	protected $transporter = UpdateAddressTransporter::class;

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
			'name' => ['string', 'max:20'],
			'dzlx_value' => ['numeric'],
			'hylx_value' => ['numeric'],
			'position' => ['array'],
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
