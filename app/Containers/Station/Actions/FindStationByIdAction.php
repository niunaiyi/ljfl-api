<?php

namespace App\Containers\Station\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindStationByIdAction extends Action
{
    public function run(Request $request)
    {
        $station = Apiato::call('Station@FindStationByIdTask', [$request->id]);

        return $station;
    }
}
