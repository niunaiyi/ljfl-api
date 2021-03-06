<?php

namespace App\Containers\Dict\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateDictAction extends Action
{
	public function run(Request $request)
	{
		$data = $request->sanitizeInput([
			// add your request data here
		]);

		$dict = Apiato::call('Dict@CreateDictTask', [$data]);

		return $dict;
	}
}
