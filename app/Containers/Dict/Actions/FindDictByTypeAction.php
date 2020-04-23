<?php

namespace App\Containers\Dict\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindDictByTypeAction extends Action
{
	public function run(Request $request)
	{
		$dict = Apiato::call('Dict@FindDictByTypeTask', [$request->type]);

		return $dict;
	}
}
