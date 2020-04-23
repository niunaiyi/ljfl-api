<?php

namespace App\Ship\Middlewares\Http;

use Closure;

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
			$filters = $request->filter;
			$request->offsetUnset('filter');
			$value = $this->getSearchValue($filters);
			$request->offsetSet('search', $value);
		}
		if ($request->has('skip')) {
			$skip = $request->skip;
			$take = $request->take;
			$request->offsetUnset('skip');
			$request->offsetUnset('take');
			$request->offsetSet('limit', $take);
			$request->offsetSet('page', $skip);
		}
		\Log::info($request);
		return $next($request);
	}
}
