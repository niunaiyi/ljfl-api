<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class findAddressByPositionTask extends Task
{

	protected $repository;

	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($position)
	{
		try {
			return  $this->repository->findWhere(['dzlx_value' =>'101003'])->take(5);
		} catch (Exception $exception) {
			throw new NotFoundException();
		}
	}
}
