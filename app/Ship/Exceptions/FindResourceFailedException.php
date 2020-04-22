<?php

namespace App\Ship\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DeleteResourceFailedException.
 *
 * @author Johannes Schobel <johannes.schobel@googlemail.com>
 */
class FindResourceFailedException extends Exception
{

	public $httpStatusCode = Response::HTTP_EXPECTATION_FAILED;

	public $message = '找不到指定的数据.';

}
