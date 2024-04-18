<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $exception) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof HttpException) {
            $statusCode = $exception->getStatusCode();
            if ($statusCode == 401) {
                return response()->view('errors.401', [], 401);
            }
            if ($statusCode == 403) {
                return response()->view('errors.403', [], 403);
            }
            if ($statusCode == 404) {
                return response()->view('errors.404', [], 404);
            }
            if ($statusCode == 405) {
                return response()->view('errors.405', [], 405);
            }
            if ($statusCode == 429) {
                return response()->view('errors.429', [], 429);
            }
            if ($statusCode == 503) {
                return response()->view('errors.503', [], 503);
            }
            if ($statusCode == 504) {
                return response()->view('errors.504', [], 504);
            }
            if ($statusCode == 422) {
                return response()->view('errors.validation_error', [], 422);
            }
            if ($statusCode == 419) {
                return response()->view('errors.419', [], 419);
            }
        }
        return parent::render($request, $exception);
    }
}
