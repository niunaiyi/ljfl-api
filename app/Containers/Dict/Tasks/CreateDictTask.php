<?php

namespace App\Containers\Dict\Tasks;

use App\Containers\Dict\Data\Repositories\DictRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateDictTask extends Task
{

  protected $repository;

  public function __construct(DictRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run(array $data)
  {
    try {
      return $this->repository->create($data);
    } catch (Exception $exception) {
      throw new CreateResourceFailedException();
    }
  }
}
