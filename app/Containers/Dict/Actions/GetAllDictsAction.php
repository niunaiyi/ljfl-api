<?php

namespace App\Containers\Dict\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllDictsAction extends Action
{
  public function run(Request $request)
  {
    $dicts = Apiato::call('Dict@GetAllDictsTask', [], ['addRequestCriteria']);

    return $dicts;
  }
}
