<?php

namespace App\Containers\Device\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteDeviceAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Device@DeleteDeviceTask', [$request->id]);
    }
}
