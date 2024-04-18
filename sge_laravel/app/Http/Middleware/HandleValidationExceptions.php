<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HandleValidationExceptions
{
    public function handle(Request $request, Closure $next)
    {
        try {
            return $next($request);
        } catch (ValidationException $e) {
            if ($request->expectsJson()) {
                return new JsonResponse(['errors' => $e->errors()], 422);
            }

            return response()->view('errors.validation_error', ['errors' => $e->errors()], 422);
        }
    }
}
