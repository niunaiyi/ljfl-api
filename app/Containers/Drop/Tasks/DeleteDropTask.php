<?php

namespace App\Containers\Drop\Tasks;

use App\Containers\Drop\Data\Repositories\DropRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteDropTask extends Task
{

    protected $repository;

    public function __construct(DropRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
