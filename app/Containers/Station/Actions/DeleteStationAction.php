<?php

namespace App\Containers\Station\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteStationAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Station@DeleteStationTask', [$request->id]);
    }
}
