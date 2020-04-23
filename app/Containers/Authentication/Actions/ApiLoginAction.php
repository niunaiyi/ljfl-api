<?php

namespace App\Containers\Authentication\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Transporters\DataTransporter;

class ApiLoginAction extends Action
{
	public function run(DataTransporter $data)
	{
		$user = Apiato::call('Authentication@ApiLoginTask', [$data->username, $data->password]);
		$token = $user->createToken('myApp');
		return [
			'user' => $user,
			'token' => $token,
		];
	}
}
