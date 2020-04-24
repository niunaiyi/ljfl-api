<?php

namespace App\Containers\Drop\UI\API\Controllers;

use App\Containers\Drop\UI\API\Requests\CreateDropRequest;
use App\Containers\Drop\UI\API\Requests\DeleteDropRequest;
use App\Containers\Drop\UI\API\Requests\GetAllDropsRequest;
use App\Containers\Drop\UI\API\Requests\FindDropByIdRequest;
use App\Containers\Drop\UI\API\Requests\UpdateDropRequest;
use App\Containers\Drop\UI\API\Transformers\DropTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Drop\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateDropRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createDrop(CreateDropRequest $request)
    {
        $drop = Apiato::call('Drop@CreateDropAction', [$request]);

        return $this->created($this->transform($drop, DropTransformer::class));
    }

    /**
     * @param FindDropByIdRequest $request
     * @return array
     */
    public function findDropById(FindDropByIdRequest $request)
    {
        $drop = Apiato::call('Drop@FindDropByIdAction', [$request]);

        return $this->transform($drop, DropTransformer::class);
    }

    /**
     * @param GetAllDropsRequest $request
     * @return array
     */
    public function getAllDrops(GetAllDropsRequest $request)
    {
        $drops = Apiato::call('Drop@GetAllDropsAction', [$request]);

        return $this->transform($drops, DropTransformer::class);
    }

    /**
     * @param UpdateDropRequest $request
     * @return array
     */
    public function updateDrop(UpdateDropRequest $request)
    {
        $drop = Apiato::call('Drop@UpdateDropAction', [$request]);

        return $this->transform($drop, DropTransformer::class);
    }

    /**
     * @param DeleteDropRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDrop(DeleteDropRequest $request)
    {
        Apiato::call('Drop@DeleteDropAction', [$request]);

        return $this->noContent();
    }
}
