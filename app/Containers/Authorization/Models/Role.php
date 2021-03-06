<?php

namespace App\Containers\Authorization\Models;

use Apiato\Core\Traits\HashIdTrait;
use Apiato\Core\Traits\HasResourceKeyTrait;
use Spatie\Permission\Models\Role as SpatieRole;

/**
 * Class Role
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Role extends SpatieRole
{

	use HashIdTrait;
	use HasResourceKeyTrait;

	protected $guard_name = 'api';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'guard_name',
		'display_name',
		'description',
		'level',
	];

	protected $casts = [
		'created_at' => 'datetime:Y-m-d H:m:s',
		'updated_at' => 'datetime:Y-m-d H:m:s',
		'deleted_at' => 'datetime:Y-m-d H:m:s',
	];
}
