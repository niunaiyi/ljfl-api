<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllUsersAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class GetAllUsersAction extends Action
{

	/**
	 * @return mixed
	 */
	public function run(Request $request)
	{
		$addressroot = $request->addressroot;
		return Apiato::call('User@GetAllUsersTask',
			[$addressroot],
			[
				'addRequestCriteria',
				'ordered',
			]
		);
	}
}
