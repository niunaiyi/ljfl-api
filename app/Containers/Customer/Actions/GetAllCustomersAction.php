<?php

namespace App\Containers\Customer\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllCustomersAction extends Action
{
	public function run(Request $request)
	{
		$addressroot = $request->addressroot;
		return Apiato::call('Customer@Customer',
			[$addressroot],
			[
				'addRequestCriteria',
				'ordered',
			]
		);
	}
}
