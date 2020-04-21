<?php

namespace App\Containers\Dict\Tasks;

use App\Containers\Dict\Data\Repositories\DictRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllDictsTask extends Task
{

  protected $repository;

  public function __construct(DictRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run()
  {
    return $this->repository->paginate();
  }
}
