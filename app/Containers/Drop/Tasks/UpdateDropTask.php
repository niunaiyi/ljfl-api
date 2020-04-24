<?php

namespace App\Containers\Drop\Tasks;

use App\Containers\Drop\Data\Repositories\DropRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateDropTask extends Task
{

    protected $repository;

    public function __construct(DropRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
