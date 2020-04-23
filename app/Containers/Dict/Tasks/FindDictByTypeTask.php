<?php

namespace App\Containers\Dict\Tasks;

use App\Containers\Dict\Data\Repositories\DictRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindDictByTypeTask extends Task
{

	protected $repository;

	public function __construct(DictRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($type)
	{
		try {
			return $this->repository->findByField('type', $type);
		} catch (Exception $exception) {
			throw new NotFoundException();
		}
	}
}
