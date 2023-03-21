<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Gestion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $msg = [
            'numeric' => 'veuillez entrer un nombre'
        ];
        $v=Validator::make(
            $request->all(),
            [
                'numc' => 'numeric',
                'nump' => 'numeric',
                'nume' => 'numeric',
            ],
            $msg,
        );
        if($v->fails()){
            return redirect('/')->withErrors($v);
        }
        return $next($request);
    }
}
