<?php

namespace App\Containers\Authentication\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\Data\Transporters\ProxyApiLoginTransporter;
use App\Containers\Authentication\Data\Transporters\ProxyRefreshTransporter;
use App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Containers\Authentication\UI\API\Requests\LogoutRequest;
use App\Containers\Authentication\UI\API\Requests\RefreshRequest;
use App\Containers\Customer\Models\Customer;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Controllers\ApiController;
use App\Ship\Parents\Requests\Request;
use App\Ship\Transporters\DataTransporter;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use EasyWeChat\Factory;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends ApiController
{

	/**
	 * @param Request $request
	 *
	 * @return JsonResponse
	 */
	public function mplogin(Request $request)
	{
		$config = config('wechat.mini_program.default');
		$code = $request->get("code", "");
		// 开始拉取用户信息

		$mp = Factory::miniProgram($config);
		$session = $mp->auth->session($code);
		$customer = Customer::whereOpenid($session['openid'])->first();
		if ($customer) {
			$session['phoneNumber'] = $customer->phonenumber;
		}
		return response()->json($session, 200);
	}


	/**
	 * @param Request $request
	 *
	 * @return array
	 * @throws \EasyWeChat\Kernel\Exceptions\DecryptException
	 */
	public function GetUserInfo(Request $request)
	{
		$config = config('wechat.mini_program.default');
		$mp = Factory::miniProgram($config);
		$decryptedData = $mp->encryptor->decryptData($request->get('session'), $request->get('iv'), $request->get('encryptedData'));
		$customer = Customer::firstOrNew(['phonenumber' => $decryptedData['phoneNumber']]);
		$customer->openid = $request->get('openid');
		$customer->nickname = $request->get('nickname');
		$customer->phonenumber = $decryptedData['phoneNumber'];
		$customer->save();

		return $decryptedData;
	}

	/**
	 * @param Request $request
	 *
	 * @return array
	 * @throws \EasyWeChat\Kernel\Exceptions\DecryptException
	 */
	public function getCustomerInfo(Request $request)
	{
		$config = config('wechat.mini_program.default');
		$mp = Factory::miniProgram($config);
		$decryptedData = $mp->encryptor->decryptData($request->get('session'), $request->get('iv'), $request->get('encryptedData'));
		$customer = Customer::firstOrNew(['phonenumber' => $decryptedData['phoneNumber']]);
		$customer->openid = $request->get('openid');
		$customer->nickname = $request->get('nickname');
		$customer->phonenumber = $decryptedData['phoneNumber'];
		$customer->save();

		return $decryptedData;
	}

	/**
	 * @param LoginRequest $request
	 *
	 * @return JsonResponse
	 */
	public function login(LoginRequest $request)
	{
		$dataTransporter = new DataTransporter($request);
		$data = Apiato::call('Authentication@ApiLoginAction', [$dataTransporter]);

		return $this->json(['user' => $this->transform($data['user'], UserTransformer::class),
			'token' => $data['token']]);
	}

	/**
	 * @param LogoutRequest $request
	 *
	 * @return JsonResponse
	 */
	public function logout(LogoutRequest $request)
	{
		$dataTransporter = new DataTransporter($request);
		$dataTransporter->bearerToken = $request->bearerToken();

		Apiato::call('Authentication@ApiLogoutAction', [$dataTransporter]);

		return $this->accepted([
			'message' => 'Token revoked successfully.',
		])->withCookie(Cookie::forget('refreshToken'));
	}

	/**
	 * This `proxyLoginForAdminWebClient` exist only because we have `AdminWebClient`
	 * The more clients (Web Apps). Each client you add in the future, must have
	 * similar functions here, with custom route for dedicated for each client
	 * to be used as proxy when contacting the OAuth server.
	 * This is only to help the Web Apps (JavaScript clients) hide
	 * their ID's and Secrets when contacting the OAuth server and obtain Tokens.
	 *
	 * @param LoginRequest $request
	 *
	 * @return JsonResponse
	 */
	public function proxyLoginForAdminWebClient(LoginRequest $request)
	{
		$dataTransporter = new ProxyApiLoginTransporter(
			array_merge($request->all(), [
				'client_id' => Config::get('authentication-container.clients.web.admin.id'),
				'client_password' => Config::get('authentication-container.clients.web.admin.secret')
			])
		);

		$result = Apiato::call('Authentication@ProxyApiLoginAction', [$dataTransporter]);

		return $this->json($result['response_content'])->withCookie($result['refresh_cookie']);
	}

	/**
	 * Read the comment in the function `proxyLoginForAdminWebClient`
	 *
	 * @param RefreshRequest $request
	 *
	 * @return JsonResponse
	 */
	public function proxyRefreshForAdminWebClient(RefreshRequest $request)
	{
		$dataTransporter = new ProxyRefreshTransporter(
			array_merge($request->all(), [
				'client_id' => Config::get('authentication-container.clients.web.admin.id'),
				'client_password' => Config::get('authentication-container.clients.web.admin.secret'),
				// use the refresh token sent in request data, if not exist try to get it from the cookie
				'refresh_token' => $request->refresh_token ?: $request->cookie('refreshToken'),
			])
		);

		$result = Apiato::call('Authentication@ProxyApiRefreshAction', [$dataTransporter]);

		return $this->json($result['response-content'])->withCookie($result['refresh-cookie']);
	}
}
