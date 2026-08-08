<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequireAdminSecret
{
    /**
     * Require a matching ADMIN_SECRET (env) via header `X-Admin-Secret` or query `admin_secret`.
     * If ADMIN_SECRET is not set, middleware passes through (convenience for local/dev).
     */
    public function handle(Request $request, Closure $next): Response
    {
        $secret = env('ADMIN_SECRET');

        if (empty($secret)) {
            // No secret configured — allow (do not block dev environments).
            return $next($request);
        }

        $provided = $request->header('X-Admin-Secret') ?? $request->query('admin_secret');

        if (! $provided || ! hash_equals($secret, (string) $provided)) {
            abort(Response::HTTP_FORBIDDEN, 'Admin access is restricted.');
        }

        return $next($request);
    }
}
