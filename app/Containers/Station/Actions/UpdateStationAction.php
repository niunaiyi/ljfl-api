<?php

namespace App\Containers\Station\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateStationAction extends Action
{
    public function run(Request $request)
    {
		$data = $request->sanitizeInput([
			'name',
			'user_id',
			'address_id',
			'position',
		]);
		if ($request->has('position')) {
			$data['position'] = json_encode($data['position']);
		}

		return  Apiato::call('Station@UpdateStationTask', [$request->id, $data]);
    }
}
