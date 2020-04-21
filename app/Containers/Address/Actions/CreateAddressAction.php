<?php

namespace App\Containers\Address\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateAddressAction extends Action
{
  public function run(Request $request)
  {
    $data = $request->sanitizeInput([
      // add your request data here
    ]);

    $address = Apiato::call('Address@CreateAddressTask', [$data]);

    return $address;
  }
}
