<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class checkType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
            if (session()->has("userID")) {
            $user = User::where("id",session("userID"))
                ->select("user_type")
                ->first();
            if ($user->user_type == "A") {
                return $next($request);
            } else {
                return redirect("controller/home");
            }
            
        } else {
            return redirect("controller/home");
        }
    }
}
