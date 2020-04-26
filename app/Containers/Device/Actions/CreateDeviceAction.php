<?php

namespace App\Containers\Device\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateDeviceAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $device = Apiato::call('Device@CreateDeviceTask', [$data]);

        return $device;
    }
}
