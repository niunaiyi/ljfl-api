<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\Authentication\Exceptions\LoginFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

/**
 * Class WebLoginTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class ApiLoginTask extends Task
{
	/**
	 * @param string $username
	 * @param string $password
	 * @return Authenticatable
	 */
	public function run(string $username, string $password)
	{
		if (!$user = Auth::attempt(['username' => $username, 'password' => $password])) {
			throw new LoginFailedException();
		}
		\Log::info($user);
		return Auth::user();
	}
}
