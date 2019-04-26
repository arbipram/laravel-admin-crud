<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Users;

class RoleAdmin
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
        $users = Users::where('name',session('username'))->first();
        if(!empty($users) && $users->id_role == 1){
            return $next($request);
        } else {
            abort('403');
        }
    }
}
