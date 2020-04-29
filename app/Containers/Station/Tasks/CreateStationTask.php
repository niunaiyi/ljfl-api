<?php

namespace App\Containers\Station\Tasks;

use App\Containers\Station\Data\Repositories\StationRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStationTask extends Task
{

    protected $repository;

    public function __construct(StationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
