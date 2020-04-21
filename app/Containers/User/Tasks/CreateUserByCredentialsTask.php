<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUserByCredentialsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserByCredentialsTask extends Task
{

  protected $repository;

  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param string $username
   * @param string $realname
   * @param string $phonenumber
   * @param string $password
   * @param string $address_id
   *
   * @return  mixed
   */
  public function run(
    string $username,
    string $realname,
    string $phonenumber,
    string $password,
    string $address_id
  ): User
  {

    try {
      // create new user
      $user = $this->repository->create([
        'password' => bcrypt($password),
        'username' => $username,
        'realname' => $realname,
        'phonenumber' => $phonenumber,
        'address_id' => $address_id,
      ]);

    } catch (Exception $e) {
      throw (new CreateResourceFailedException())->debug($e);
    }

    return $user;
  }

}
