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
class UpdateUserTask extends Task
{

	protected $repository;

	public function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * @param $userData
	 * @param $userId
	 *
	 * @return mixed
	 * @return  User
	 * @throws NotFoundException
	 * @throws UpdateResourceFailedException
	 *
	 * @throws InternalErrorException
	 */
	public function run($id, array $data): User
	{
		try {
			return $this->repository->update($data, $id);
		} catch (Exception $exception) {
			throw new UpdateResourceFailedException();
		}
	}

}
