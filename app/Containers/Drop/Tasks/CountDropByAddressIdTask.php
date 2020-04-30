<?php

namespace App\Containers\Drop\Tasks;

use App\Containers\Address\Models\Address;
use App\Containers\Drop\Data\Repositories\DropRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CountDropByAddressIdTask extends Task
{

    protected $repository;

    public function __construct(DropRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
	        $data = [];
	        $parent =  Address::find($id);
	        $children = $parent->children()->get();
	        foreach ($children as $address) {
		        $drops = $this->repository->whereHas('device', function ($query) use ($address) {
			        $query->whereHas('address', function ($query) use ($address) {
				        $strSQL = '\'' . $address->parent_name . '\'@> parent_name';
				        $query->whereRaw($strSQL);
			        });
		        })->selectRaw('ljlx_value, ljxl_value, sum(amount) as ljsum')
			        ->groupby('ljlx_value')
			        ->groupby('ljxl_value')->get()->toArray();

		        $drop['areaid'] = $address->id;
		        $drop['areaname'] = $address->name;
		        $drop['data'] = $drops;

		        $ljsums = array_column($drops, 'ljsum');
		        $drop['summary'] = array_sum($ljsums);
		        array_push($data, $drop);
	        }

            return $data;
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
