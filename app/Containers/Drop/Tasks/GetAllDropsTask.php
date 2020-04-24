<?php

namespace App\Containers\Drop\Tasks;

use App\Containers\Drop\Data\Repositories\DropRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllDropsTask extends Task
{

    protected $repository;

    public function __construct(DropRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
