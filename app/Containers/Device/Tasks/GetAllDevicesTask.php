<?php

namespace App\Containers\Device\Tasks;

use App\Containers\Address\Models\Address;
use App\Containers\Device\Data\Repositories\DeviceRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllDevicesTask extends Task
{

    protected $repository;

    public function __construct(DeviceRepository $repository)
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
        return $this->repository->paginate();
    }
}
