<?php

namespace App\Containers\Customer\Tasks;

use App\Containers\Customer\Data\Repositories\CustomerRepository;
use App\Containers\Customer\Models\Customer;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCustomerAddressesTask extends Task
{

	protected $repository;

	public function __construct(CustomerRepository $repository)
	{
		$this->repository = $repository;
	}

	public function run($customerId, $addresses): Customer
	{
		try {
			$customer = $this->repository->find($customerId);
			$customer->addresses()->detach();
			foreach ($addresses as $address) {
				$customer->addresses()->attach($address['id']);
			}
		} catch (Exception $exception) {
			throw new UpdateResourceFailedException();
		}

		return $customer;
	}
}
