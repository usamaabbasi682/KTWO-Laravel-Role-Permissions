<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\{Auth,Cache};
use App\Models\User;

class CheckIsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Cache::put('loginUserId',Auth::id());
            $result = User::find(Auth::id())->update([
                'last_logged_in_at' => now(),
            ]);
        } 
        
        // else {
        //     $id=Cache::get('loginUserId');
        //     $result = User::find($id);
        //     if ($result) {
        //         $result->update([
        //             'is_login' => '0',
        //         ]);
        //         Cache::forget('loginUserId');
        //     }
        // }

        return $next($request);
    }
}
