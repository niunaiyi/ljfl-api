<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class GetAddressChildrenTask extends Task
{

	protected $repository;

	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($id)
	{
		try {
			$addresses = $this->repository->find($id)->children()->get();
			return $addresses;
		} catch (Exception $exception) {
			throw new NotFoundException();
		}
	}
}
