<?php

namespace App\Containers\Drop\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CountDropByAddressIdAction extends Action
{
    public function run(Request $request)
    {
        $drop = Apiato::call('Drop@CountDropByAddressIdTask', [$request->id]);

        return $drop;
    }
}
