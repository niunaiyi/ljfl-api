<?php

namespace App\Containers\Dict\Tasks;

use App\Containers\Dict\Data\Repositories\DictRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindDictByIdTask extends Task
{

	protected $repository;

	public function __construct(DictRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($id)
	{
		try {
			return $this->repository->find($id);
		} catch (Exception $exception) {
			throw new NotFoundException();
		}
	}
}
