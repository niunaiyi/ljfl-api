<?php

namespace App\Containers\Dict\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteDictAction extends Action
{
  public function run(Request $request)
  {
    return Apiato::call('Dict@DeleteDictTask', [$request->id]);
  }
}
