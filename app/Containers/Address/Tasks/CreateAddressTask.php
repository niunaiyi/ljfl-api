<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAddressTask extends Task
{

	protected $repository;

	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run(array $data)
	{
		try {
			$data['position'] = json_encode($data['position']);
			return $this->repository->create($data);
		} catch (Exception $exception) {
			throw new CreateResourceFailedException();
		}
	}
}
