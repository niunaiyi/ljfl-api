<?php

namespace App\Containers\Station\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateStationAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $station = Apiato::call('Station@CreateStationTask', [$data]);

        return $station;
    }
}
