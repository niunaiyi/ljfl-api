<?php

namespace App\Containers\Authentication\Tasks;

use App\Ship\Parents\Tasks\Task;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Log;

/**
 * Class WebLoginTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class ApiLoginTask extends Task
{
  /**
   * @param string $username
   * @param string $password
   * @return Authenticatable
   */
  public function run(string $username, string $password)
  {
    Log::info($username);
    Log::info($password);
    if (!$user = Auth::attempt(['username' => $username, 'password' => $password])) {
      Log::info($user);
      $user = Auth::user();
      //throw new LoginFailedException();
    }
    return Auth::user();
  }
}
