<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 *
*/
class LoginController extends Controller
{

       /**
        * @param Request $request
        * @return \Illuminate\Http\JsonResponse
        */
       public function index(Request $request)
       {
            $credentials = $request->only(['email', 'password']);

            if (! $token = auth()->attempt($credentials)) {

                 return \response()->json([
                     'error' => true,
                     'meessage' => 'Введен неверный логин или пароль'
                 ], Response::HTTP_UNAUTHORIZED);
            }

            return response()->json(['token' => $token]);
       }
}
