<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    /*Teste 1.0*/
    public function handle($request, Closure $next, $perfilRoute)
    {
        $perfilUser = $request->user()->perfil;

        if ($perfilUser == $perfilRoute) {
            return $next($request);
        }
        return response()->view('errors.check-permission');

    }


    /* OFICIAL

    public function handle($request, Closure $next, $permission)
    {
        $permission = explode('|', $permission);

        if (checkPermission($permission)) {
            return $next($request);
        }

        return response()->view('errors.check-permission');
    }

    private function checkPermission($permissions)
    {
        $userAccess = getMyPermission(auth()->user()->is_permission);
        foreach ($permissions as $key => $value) {
            if ($value == $userAccess) {
                return true;
            }
        }
        return false;
    }

    private function getMyPermission($id)
    {
        switch ($id) {
            case 1:
                return 'admin';
                break;
            case 2:
                return 'superadmin';
                break;
            default:
                return 'user';
                break;
        }
    }
*/
}
