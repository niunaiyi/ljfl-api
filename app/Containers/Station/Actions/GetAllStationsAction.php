<?php

namespace App\Containers\Station\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllStationsAction extends Action
{
    public function run(Request $request)
    {
        $stations = Apiato::call('Station@GetAllStationsTask', [], ['addRequestCriteria']);

        return $stations;
    }
}
