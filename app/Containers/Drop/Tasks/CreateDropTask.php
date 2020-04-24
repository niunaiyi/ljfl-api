<?php

namespace App\Containers\Drop\Tasks;

use App\Containers\Drop\Data\Repositories\DropRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateDropTask extends Task
{

    protected $repository;

    public function __construct(DropRepository $repository)
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
