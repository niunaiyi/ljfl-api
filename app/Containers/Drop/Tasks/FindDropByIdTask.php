<?php

namespace App\Containers\Drop\Tasks;

use App\Containers\Drop\Data\Repositories\DropRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindDropByIdTask extends Task
{

    protected $repository;

    public function __construct(DropRepository $repository)
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
