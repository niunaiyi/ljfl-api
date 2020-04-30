<?php

namespace App\Containers\Customer\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCustomerAction extends Action
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


		$customer = Apiato::call('Customer@CreateCustomerTask', [$data]);
		if ($request->has('addresses')) {
			$customer = Apiato::call('Customer@UpdateCustomerAddressesTask', [$customer->id, $request->addresses['data']]);
		}

		return $customer;
	}
}
