<?php

namespace App\Containers\Device\UI\API\Controllers;

use App\Containers\Device\UI\API\Requests\CreateDeviceRequest;
use App\Containers\Device\UI\API\Requests\DeleteDeviceRequest;
use App\Containers\Device\UI\API\Requests\GetAllDevicesRequest;
use App\Containers\Device\UI\API\Requests\FindDeviceByIdRequest;
use App\Containers\Device\UI\API\Requests\UpdateDeviceRequest;
use App\Containers\Device\UI\API\Transformers\DeviceTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Device\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateDeviceRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createDevice(CreateDeviceRequest $request)
    {
        $device = Apiato::call('Device@CreateDeviceAction', [$request]);

        return $this->created($this->transform($device, DeviceTransformer::class));
    }

    /**
     * @param FindDeviceByIdRequest $request
     * @return array
     */
    public function findDeviceById(FindDeviceByIdRequest $request)
    {
        $device = Apiato::call('Device@FindDeviceByIdAction', [$request]);

        return $this->transform($device, DeviceTransformer::class);
    }

    /**
     * @param GetAllDevicesRequest $request
     * @return array
     */
    public function getAllDevices(GetAllDevicesRequest $request)
    {
        $devices = Apiato::call('Device@GetAllDevicesAction', [$request]);

        return $this->transform($devices, DeviceTransformer::class);
    }

    /**
     * @param UpdateDeviceRequest $request
     * @return array
     */
    public function updateDevice(UpdateDeviceRequest $request)
    {
        $device = Apiato::call('Device@UpdateDeviceAction', [$request]);

        return $this->transform($device, DeviceTransformer::class);
    }

    /**
     * @param DeleteDeviceRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteDevice(DeleteDeviceRequest $request)
    {
        Apiato::call('Device@DeleteDeviceAction', [$request]);

        return $this->noContent();
    }
}
