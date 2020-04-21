<?php

namespace App\Containers\Address\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateAddressAction extends Action
{
  public function run(Request $request)
  {
    $data = $request->sanitizeInput([
      'name',
      'dzlx_value',
      'hylx_value',
      'position',
      'parent_name',
    ]);

    \Log::info($data);
    $address = Apiato::call('Address@UpdateAddressTask', [$request->id, $data]);

    return $address;
  }
}
