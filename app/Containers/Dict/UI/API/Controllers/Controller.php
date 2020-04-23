<?php

namespace App\Containers\Dict\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Dict\UI\API\Requests\CreateDictRequest;
use App\Containers\Dict\UI\API\Requests\DeleteDictRequest;
use App\Containers\Dict\UI\API\Requests\FindDictByIdRequest;
use App\Containers\Dict\UI\API\Requests\FindDictByTypeRequest;
use App\Containers\Dict\UI\API\Requests\GetAllDictsRequest;
use App\Containers\Dict\UI\API\Requests\UpdateDictRequest;
use App\Containers\Dict\UI\API\Transformers\DictTransformer;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller
 *
 * @package App\Containers\Dict\UI\API\Controllers
 */
class Controller extends ApiController
{
	/**
	 * @param CreateDictRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function createDict(CreateDictRequest $request)
	{
		$dict = Apiato::call('Dict@CreateDictAction', [$request]);

		return $this->created($this->transform($dict, DictTransformer::class));
	}

	/**
	 * @param FindDictByIdRequest $request
	 * @return array
	 */
	public function findDictById(FindDictByIdRequest $request)
	{
		$dict = Apiato::call('Dict@FindDictByIdAction', [$request]);

		return $this->transform($dict, DictTransformer::class);
	}

	/**
	 * @param FindDictByTypeRequest $request
	 * @return array
	 */
	public function findDictByType(FindDictByTypeRequest $request)
	{
		$dict = Apiato::call('Dict@FindDictByTypeAction', [$request]);

		return $this->transform($dict, DictTransformer::class);
	}

	/**
	 * @param GetAllDictsRequest $request
	 * @return array
	 */
	public function getAllDicts(GetAllDictsRequest $request)
	{
		$dicts = Apiato::call('Dict@GetAllDictsAction', [$request]);

		return $this->transform($dicts, DictTransformer::class);
	}

	/**
	 * @param UpdateDictRequest $request
	 * @return array
	 */
	public function updateDict(UpdateDictRequest $request)
	{
		$dict = Apiato::call('Dict@UpdateDictAction', [$request]);

		return $this->transform($dict, DictTransformer::class);
	}

	/**
	 * @param DeleteDictRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function deleteDict(DeleteDictRequest $request)
	{
		Apiato::call('Dict@DeleteDictAction', [$request]);

		return $this->noContent();
	}
}
