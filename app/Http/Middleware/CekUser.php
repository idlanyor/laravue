<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CekUser
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
        $user = User::where('email',$request->email)->first();
        if ($user->level == 'admin') {
            return redirect('dashboard');
        }elseif ($user->level == 'siswa') {
            return redirect('single');
        }
        return $next($request);
    }
}
