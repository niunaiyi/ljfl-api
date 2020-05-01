<?php

namespace App\Containers\Address\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Address\Models\Address;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Log;

class UpdateAddressAction extends Action
{
	public function run(Request $request): Address
	{
		$data = $request->sanitizeInput([
			'dzlx_value',
			'hylx_value',
			'position',
		]);

		if ($request->has('position')) {
			$data['position'] = json_encode($data['position']);
		}

		if ($request->has('name')) {
			$address = Apiato::call('Address@ChangeAddressNameTask', [$request->id, $request->name]);
		}

		if ($request->has('parent_id')) {
			$address = Apiato::call('Address@ChangeAddressParentTask', [$request->id, $request->parent_id]);
		}

		return Apiato::call('Address@UpdateAddressTask', [$request->id, $data]);
	}
}
