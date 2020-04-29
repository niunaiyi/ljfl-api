<?php

namespace App\Containers\Station\UI\API\Controllers;

use App\Containers\Station\UI\API\Requests\CreateStationRequest;
use App\Containers\Station\UI\API\Requests\DeleteStationRequest;
use App\Containers\Station\UI\API\Requests\GetAllStationsRequest;
use App\Containers\Station\UI\API\Requests\FindStationByIdRequest;
use App\Containers\Station\UI\API\Requests\UpdateStationRequest;
use App\Containers\Station\UI\API\Transformers\StationTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Station\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateStationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createStation(CreateStationRequest $request)
    {
        $station = Apiato::call('Station@CreateStationAction', [$request]);

        return $this->created($this->transform($station, StationTransformer::class));
    }

    /**
     * @param FindStationByIdRequest $request
     * @return array
     */
    public function findStationById(FindStationByIdRequest $request)
    {
        $station = Apiato::call('Station@FindStationByIdAction', [$request]);

        return $this->transform($station, StationTransformer::class);
    }

    /**
     * @param GetAllStationsRequest $request
     * @return array
     */
    public function getAllStations(GetAllStationsRequest $request)
    {
        $stations = Apiato::call('Station@GetAllStationsAction', [$request]);

        return $this->transform($stations, StationTransformer::class);
    }

    /**
     * @param UpdateStationRequest $request
     * @return array
     */
    public function updateStation(UpdateStationRequest $request)
    {
        $station = Apiato::call('Station@UpdateStationAction', [$request]);

        return $this->transform($station, StationTransformer::class);
    }

    /**
     * @param DeleteStationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteStation(DeleteStationRequest $request)
    {
        Apiato::call('Station@DeleteStationAction', [$request]);

        return $this->noContent();
    }
}
