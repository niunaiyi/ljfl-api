<?php

namespace App\Containers\Device\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllDevicesAction extends Action
{
    public function run(Request $request)
    {
    	$addressroot = $request->addressroot;
		return Apiato::call('Device@GetAllDevicesTask', [$addressroot], ['addRequestCriteria']);
    }
}
