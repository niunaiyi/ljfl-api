<?php

namespace App\Containers\Authentication\Tasks;

use App\Ship\Parents\Tasks\Task;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

/**
 * Class GetAuthenticatedUserTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class GetAuthenticatedUserTask extends Task
{

	/**
	 * @return  Authenticatable|null
	 */
	public function run()
	{
		return Auth::user();
	}

}
