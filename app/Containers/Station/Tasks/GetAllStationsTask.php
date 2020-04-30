<?php

namespace App\Containers\Station\Tasks;

use App\Containers\Address\Models\Address;
use App\Containers\Station\Data\Repositories\StationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStationsTask extends Task
{

    protected $repository;

    public function __construct(StationRepository $repository)
    {
        $this->repository = $repository;
    }

	public function run($addressroot)
	{
		if ($addressroot) {
			$this->repository->whereHas('address', function ($query) use ($addressroot) {
				$address = Address::find($addressroot);
				$query->whereRaw('parent_name<@\'' . $address->parent_name . '\'');
			});
		}
		return $this->repository->paginate();
	}
}
