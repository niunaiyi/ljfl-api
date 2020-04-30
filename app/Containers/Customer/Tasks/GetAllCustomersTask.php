<?php

namespace App\Containers\Customer\Tasks;

use App\Containers\Address\Models\Address;
use App\Containers\Customer\Data\Repositories\CustomerRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCustomersTask extends Task
{

	protected $repository;

	public function __construct(CustomerRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($addressroot)
	{
		if ($addressroot) {
			$this->repository->whereHas('addresses', function ($query) use ($addressroot) {
				$address = Address::find($addressroot);
				$query->whereRaw('parent_name<@\'' . $address->parent_name . '\'');
			});
		}
		return $this->repository->paginate();
	}
}
