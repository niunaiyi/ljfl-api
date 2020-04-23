<?php

namespace App\Containers\Customer\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteCustomerAction extends Action
{
	public function run(Request $request)
	{
		return Apiato::call('Customer@DeleteCustomerTask', [$request->id]);
	}
}
