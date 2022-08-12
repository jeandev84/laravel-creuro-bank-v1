<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


/**
 * Customized !!!
*/
class AuthenticateApi extends Middleware
{
   protected function authenticate($request, array $guards)
   {
        $token = $request->query('api_token');

        if (empty($token)) {
            $token = $request->input('token');
        }

        if (empty($token)) {
            $token = $request->bearerToken();
        }

        if ($token === config('apitokens')[0]) return;

        $this->unauthenticated($request, $guards);
   }
}
