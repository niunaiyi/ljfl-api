<?php

namespace App\Containers\Drop\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindDropByIdAction extends Action
{
    public function run(Request $request)
    {
        $drop = Apiato::call('Drop@FindDropByIdTask', [$request->id]);

        return $drop;
    }
}
