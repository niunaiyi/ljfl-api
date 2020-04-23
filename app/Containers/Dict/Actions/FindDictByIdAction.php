<?php

namespace App\Containers\Dict\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindDictByIdAction extends Action
{
	public function run(Request $request)
	{
		$dict = Apiato::call('Dict@FindDictByIdTask', [$request->id]);

		return $dict;
	}
}
