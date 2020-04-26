<?php

namespace App\Containers\Device\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindDeviceByIdAction extends Action
{
    public function run(Request $request)
    {
        $device = Apiato::call('Device@FindDeviceByIdTask', [$request->id]);

        return $device;
    }
}
