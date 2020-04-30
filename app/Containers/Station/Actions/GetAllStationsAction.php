<?php

namespace App\Containers\Station\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllStationsAction extends Action
{
    public function run(Request $request)
    {
		$addressroot = $request->addressroot;

		return  Apiato::call('Station@GetAllStationsTask', [$addressroot], ['addRequestCriteria']);
    }
}
