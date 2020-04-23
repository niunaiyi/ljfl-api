<?php

namespace App\Containers\Dict\Tasks;

use App\Containers\Dict\Data\Repositories\DictRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteDictTask extends Task
{

	protected $repository;

	public function __construct(DictRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($id)
	{
		try {
			return $this->repository->delete($id);
		} catch (Exception $exception) {
			throw new DeleteResourceFailedException();
		}
	}
}
