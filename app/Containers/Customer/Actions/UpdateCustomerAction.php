<?php

namespace App\Containers\Customer\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateCustomerAction extends Action
{
	public function run(Request $request)
	{
		$data = $request->sanitizeInput([
			'nickname',
			'realname',
			'openid',
			'phonenumber',
			'score',
		]);

		if ($request->has('addresses')) {
			$customer = Apiato::call('Customer@UpdateCustomerAddressesTask', [$request->id, $request->addresses['data']]);
		}

		$customer = Apiato::call('Customer@UpdateCustomerTask', [$request->id, $data]);

		return $customer;
	}
}
