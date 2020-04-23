<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateAddressTask extends Task
{

	protected $repository;

	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($id, array $data)
	{
		try {
			\Log::info($data);
			return $this->repository->update($data, $id);
		} catch (Exception $exception) {
			throw new UpdateResourceFailedException();
		}
	}
}
