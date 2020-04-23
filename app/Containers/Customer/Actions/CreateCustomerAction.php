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
			// add your request data here
		]);

		$customer = Apiato::call('Customer@CreateCustomerTask', [$data]);

		return $customer;
	}
}
