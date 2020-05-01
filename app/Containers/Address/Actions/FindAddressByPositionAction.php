<?php

namespace App\Containers\Address\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindAddressByPositionAction extends Action
{
	public function run(Request $request)
	{
		return Apiato::call('Address@FindAddressByPositionTask', [$request->position]);
	}
}
