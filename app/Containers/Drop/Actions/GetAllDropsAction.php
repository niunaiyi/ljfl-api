<?php

namespace App\Containers\Drop\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllDropsAction extends Action
{
    public function run(Request $request)
    {
        $drops = Apiato::call('Drop@GetAllDropsTask', [], ['addRequestCriteria']);

        return $drops;
    }
}
