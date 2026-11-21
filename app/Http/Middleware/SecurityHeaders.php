<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $headers = [
            'X-Content-Type-Options' => 'nosniff',
            'X-Frame-Options' => 'DENY',
            'Referrer-Policy' => 'strict-origin-when-cross-origin',
            'Permissions-Policy' => 'camera=(), microphone=(), geolocation=()',
        ];

        // CSP & HSTS hanya di production (Vite dev server butuh aturan berbeda)
        if (app()->isProduction()) {
            $headers['Strict-Transport-Security'] = 'max-age=31536000; includeSubDomains';
            $headers['Content-Security-Policy'] = "default-src 'self'; "
                ."style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
                ."font-src https://fonts.gstatic.com; img-src 'self' data:; script-src 'self'; "
                ."base-uri 'self'; form-action 'self'; frame-ancestors 'none'";
        }

        foreach ($headers as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;
    }
}
