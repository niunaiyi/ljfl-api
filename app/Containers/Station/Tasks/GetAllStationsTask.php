<?php

namespace App\Containers\Station\Tasks;

use App\Containers\Station\Data\Repositories\StationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStationsTask extends Task
{

    protected $repository;

    public function __construct(StationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
