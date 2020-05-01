<?php

namespace App\Containers\Address\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

class GetAddressChildrenAction extends Action
{
	public function run(Request $request)
	{
		return Apiato::call('Address@GetAddressChildrenTask', [$request->id]);
	}
}
