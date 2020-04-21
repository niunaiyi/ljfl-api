<?php

namespace App\Containers\Customer\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindCustomerByIdAction extends Action
{
  public function run(Request $request)
  {
    $customer = Apiato::call('Customer@FindCustomerByIdTask', [$request->id]);

    return $customer;
  }
}
