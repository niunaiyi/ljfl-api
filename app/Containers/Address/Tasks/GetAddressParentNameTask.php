<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Containers\Address\Models\Address;
use App\Ship\Parents\Tasks\Task;

class GetAddressParentNameTask extends Task
{

	protected $repository;

	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($id)
	{
		try {
			$address = Address::find($id);
			return $address->parent_name;
		} catch (Exception $exception) {
			throw new UpdateResourceFailedException();
		}
	}
}
