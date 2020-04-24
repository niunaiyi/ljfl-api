<?php

namespace App\Containers\Drop\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateDropAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $drop = Apiato::call('Drop@CreateDropTask', [$data]);

        return $drop;
    }
}
