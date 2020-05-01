<?php

namespace App\Containers\Device\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateDeviceAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
        	'name',
	        'sblx_value',
	        'sbxh_value',
	        'user_id',
	        'address_id',
	        'position',
        ]);
	    if ($request->has('position')) {
		    $data['position'] = json_encode($data['position']);
	    }

	    return  Apiato::call('Device@UpdateDeviceTask', [$request->id, $data]);
    }
}
