<?php

namespace App\Containers\Authorization\Tasks;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authorization\Data\Repositories\RoleRepository;
use App\Containers\Authorization\Models\Role;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Class AssignRoleToPermissionTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class AssignRoleToPermissionTask extends Task
{
	protected $repository;

	public function __construct(RoleRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @param $id
	 * @param array $permissions
	 * @return  Authenticatable
	 */
	public function run($id, array $permissions): Role
	{
		$role = $this->repository->find($id);
		$role->permissions()->detach();
		array_map(function ($permission) use ($role) {
			$permission = Apiato::call('Authorization@FindPermissionTask', [$permission['id']]);
			$role->givePermissionTo($permission);
		}, $permissions);
		//$role = $role->syncPermissions($permissions);

		return $role;
	}

}
