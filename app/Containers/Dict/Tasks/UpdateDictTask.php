<?php

namespace App\Containers\Dict\Tasks;

use App\Containers\Dict\Data\Repositories\DictRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateDictTask extends Task
{

  protected $repository;

  public function __construct(DictRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run($id, array $data)
  {
    try {
      return $this->repository->update($data, $id);
    } catch (Exception $exception) {
      throw new UpdateResourceFailedException();
    }
  }
}
