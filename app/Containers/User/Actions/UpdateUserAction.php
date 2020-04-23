<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\User\Models\User;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;
use App\Ship\Parents\Requests\Request;

/**
 * Class UpdateUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserAction extends Action
{

	/**
	 * @param Request $request
	 * @return  User
	 */
	public function run(Request $request): User
	{
		$data = $request->sanitizeInput([
			'password',
			'username',
			'realname',
			'phonenumber',
			'address_id',
		]);

		if ($request->has('roles')) {
			$user = Apiato::call('User@UpdateUserRolesTask', [$request->id, $request->roles['data']]);
		}


		$user = Apiato::call('User@UpdateUserTask', [$request->id, $data]);
		return $user;
	}
}
