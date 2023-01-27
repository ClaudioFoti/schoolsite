<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IdentifyTenantMiddleware
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
        // Speed up if tenant is already identified for session
        if(session()->has('tenant_id')) {
            $tenant = Tenant::find(session()->get('tenant_id'));
            app()->singleton('tenant', fn () => $tenant);
            return $next($request);
        }

        // Detect if we are landlord situation
        if($request->getHost() === '127.0.0.1') {
            return $next($request);
        }

        $subdomain = Str::of($request->getHost())->before('.')->toString();
        $tenant = Tenant::where('subdomain', $subdomain)->first();

        app()->singleton('tenant', fn () => $tenant);
        session()->put('tenant_id', $tenant->id);


        return $next($request);
    }
}
