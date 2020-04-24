<?php

namespace App\Ship\Middlewares\Http;

use Closure;
use Illuminate\Support\Facades\Auth;

class DevextremMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ($request->has('filter')) {
			$request->offsetUnset('filter');
		}
		if ($request->has('skip')) {
			$skip = $request->skip;
			$take = $request->take;
			$request->offsetUnset('skip');
			$request->offsetUnset('take');
			$request->offsetSet('limit', $take);
			$request->offsetSet('page', ($skip + $take) / $take);
		}

		if ($request->has('sort')) {
			$sorts = json_decode($request->sort);
			foreach ($sorts as $sort) {
				$fieldName = $sort->selector;
				$desc = $sort->desc ? 'desc' : 'asc';
				$request->offsetSet('orderBy', $fieldName);
				$request->offsetSet('sortedBy', $desc);
			}
			$request->offsetUnset('sort');
		}
		return $next($request);
	}
}
