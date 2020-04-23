<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Class UpdateUserTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UpdateUserRolesTask extends Task
{

	protected $repository;

	public function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @param $roles
	 * @param $userId
	 *
	 * @return mixed
	 */
	public function run($userId, $roles): User
	{
		try {
			$user = $this->repository->find($userId);
			$user->roles()->detach();
			foreach ($roles as $role) {
				$user->roles()->attach($role['id']);
			}
		} catch (Exception $exception) {
			throw new UpdateResourceFailedException();
		}

		return $user;
	}

}
