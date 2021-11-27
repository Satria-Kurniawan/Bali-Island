<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class EnsureUserRoleIsAllowedToAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user_role = auth()->user()->role;
            $currentRouteName = Route::currentRouteName();

            if (in_array($currentRouteName, $this->userAccessRole()[$user_role])) {
                return $next($request);
            } else {
                abort(403, 'Unauthorized');
            }
        } catch (\Throwable $th) {
            abort(403, 'Unauthorized');
        }
    }

    private function userAccessRole()
    {
        return [
            'user' => [
                'welcome',
                'konten',
                'searchData'
            ],
            'admin' => [
                'kategori',
                'storeCategory',
                'destroyCategory',
                'editCategory',
                'updateCategory',
                'postingan',
                'createPost',
                'storePost',
                'destroyPost',
                'editPost',
                'updatePost',
                'home',
                'searchDataCategory',
                'searchDataPost'
            ],
        ];
    }
}
