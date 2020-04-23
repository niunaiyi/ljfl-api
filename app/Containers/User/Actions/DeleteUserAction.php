<?php

namespace App\Containers\User\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use App\Ship\Transporters\DataTransporter;

/**
 * Class DeleteUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class DeleteUserAction extends Action
{

	/**
	 * @param DataTransporter $data
	 */
	public function run(Request $request): void
	{
		$id = $request->id;
		Apiato::call('User@DeleteUserTask', [$id]);
	}
}
