<?php

namespace App\Containers\Address\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAddressAction extends Action
{
	public function run(Request $request)
	{
		$data = $request->sanitizeInput([
			'name',
			'dzlx_value',
			'hylx_value',
			'position',
		]);
		$parent_name = Apiato::call('Address@GetAddressParentNameTask', [$request->parent_id]);
		$data['parent_name'] = $parent_name .'.' .$data['name'];

		return Apiato::call('Address@CreateAddressTask', [$data]);
	}
}
