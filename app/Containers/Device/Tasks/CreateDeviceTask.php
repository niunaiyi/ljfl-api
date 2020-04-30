<?php

namespace App\Containers\Device\Tasks;

use App\Containers\Device\Data\Repositories\DeviceRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateDeviceTask extends Task
{

    protected $repository;

    public function __construct(DeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
			\Log::info($exception);
            throw new CreateResourceFailedException();
        }
    }
}
