<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\DB;

class ChangeAddressParentTask extends Task
{

	protected $repository;

	public function __construct(AddressRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($id, $parent_id)
	{
		try {
			$address = $this->repository->find($id);
			$parent = $this->repository->find($parent_id);

			$new_parent_name = $parent->parent_name . '.' . $address->name;
			$old_parent_name = $address->parent_name;

			$strSQL = 'UPDATE addresses SET parent_name = \'' . $new_parent_name . '\' || subpath(parent_name, nlevel(\'' . $new_parent_name . '\')) WHERE parent_name ~ \'' . $old_parent_name . '.*{1,}\'';
			DB::update($strSQL);
			$strSQL = 'update addresses set parent_name =\'' . $new_parent_name . '\' where id = ' . $address->id;
			DB::update($strSQL);

			return $this->repository->find($id);
		} catch (Exception $exception) {
			//throw new UpdateResourceFailedException();
		}
	}
}
