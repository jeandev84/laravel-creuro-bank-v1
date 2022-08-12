<?php
namespace App\Http\Middleware;


/**
 *
*/
class JwtVerifyMiddleware
{
     public function handle($request, \Closure $next)
     {

          // TODO business logic for verify jwt token


          return $next($request);
     }
}
