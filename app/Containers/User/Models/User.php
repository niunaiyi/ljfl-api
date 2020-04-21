<?php

namespace App\Containers\User\Models;

use App\Containers\Address\Models\Address;
use App\Containers\Authorization\Traits\AuthorizationTrait;
use App\Containers\Payment\Contracts\ChargeableInterface;
use App\Containers\Payment\Traits\ChargeableTrait;
use App\Ship\Parents\Models\UserModel;
use EloquentFilter\Filterable;
use Illuminate\Notifications\Notifiable;
use LaravelFillableRelations\Eloquent\Concerns\HasFillableRelations;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class User extends UserModel implements ChargeableInterface
{

  use ChargeableTrait;
  use AuthorizationTrait;
  use Notifiable;
  use HasRoles;
  use HasFillableRelations;
  use Filterable;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'username',
    'realname',
    'password',
    'address_id',
  ];

  /**
   * The dates attributes.
   *
   * @var array
   */
  protected $dates = [
    'created_at',
    'updated_at',
    'deleted_at',
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
    'password',
  ];

  public function setPasswordAttribute($password)
  {
    $this->attributes['password'] = bcrypt($password);
  }

  public function address()
  {
    return $this->hasOne(Address::class, 'id', 'address_id');
  }
}
