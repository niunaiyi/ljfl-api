<?php

namespace App\Containers\Drop\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteDropAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Drop@DeleteDropTask', [$request->id]);
    }
}
