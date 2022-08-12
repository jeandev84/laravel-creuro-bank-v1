<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


/**
 *
*/
class AuthenticationController extends Controller
{

       /**
        * @param Request $request
        * @return \Illuminate\Http\JsonResponse
       */
       public function login(Request $request)
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



      /**
       * Refresh token
       *
       * @return \Illuminate\Http\JsonResponse
       */
       public function refresh()
       {
           try {

               $token = auth()->refresh();

           } catch (\Exception $e) {

               return \response()->json([
                   'error' => true,
                   'message' => $e->getMessage()
               ], Response::HTTP_UNAUTHORIZED);
           }


           return \response()->json(['token' => $token]);
       }
}
