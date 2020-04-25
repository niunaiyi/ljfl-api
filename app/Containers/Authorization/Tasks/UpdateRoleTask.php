<?php

namespace App\Containers\Authorization\Tasks;

use App\Containers\Authorization\Data\Repositories\RoleRepository;
use App\Containers\Authorization\Models\Role;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class CreateRoleTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateRoleTask extends Task
{

	/**
	 * @var  RoleRepository
	 */
	protected $repository;

	/**
	 * CreateRoleTask constructor.
	 *
	 * @param RoleRepository $repository
	 */
	public function __construct(RoleRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @param $id
	 * @param array $data
	 * @return Role
	 */
	public function run($id, array $data)
	{
		try {
			return $this->repository->update($data, $id);
		} catch (Exception $exception) {
			throw new UpdateResourceFailedException();
		}
	}

}
