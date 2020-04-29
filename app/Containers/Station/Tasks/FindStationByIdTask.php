<?php

namespace App\Containers\Station\Tasks;

use App\Containers\Station\Data\Repositories\StationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindStationByIdTask extends Task
{

    protected $repository;

    public function __construct(StationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
