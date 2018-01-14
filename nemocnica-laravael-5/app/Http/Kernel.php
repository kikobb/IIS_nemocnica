<?php

namespace App\Http;

use App\Http\Middleware\Admin;
use App\Http\Middleware\AdminPersonal;
use App\Http\Middleware\AdminPersonalNoIndexCheck;
use App\Http\Middleware\Doktor;
use App\Http\Middleware\DoktorSestra;
use App\Http\Middleware\DoktorSestraPacientIndChck;
use App\Http\Middleware\DoktorSestraPrijemca;
use App\Http\Middleware\PacientIndChck;
use App\Http\Middleware\PersonalPacient;
use App\Http\Middleware\PersonalPacientNoIndexCheck;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\PersonalPacient::class,
        \App\Http\Middleware\Doktor::class,
        \App\Http\Middleware\DoktorSestra::class,
        \App\Http\Middleware\DoktorSestraPrijemca::class,
        \App\Http\Middleware\Admin::class,
        \App\Http\Middleware\AdminPersonal::class,
        \App\Http\Middleware\AdminPersonalNoIndexCheck::class,
        \App\Http\Middleware\PersonalPacientNoIndexCheck::class,
        \App\Http\Middleware\DoktorSestraPacientIndChck::class,

    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'personalPacient' => \App\Http\Middleware\PersonalPacient::class,
        'personal' => \App\Http\Middleware\DoktorSestraPrijemca::class,
        'doktor' => \App\Http\Middleware\Doktor::class,
        'doktorSestra' => \App\Http\Middleware\DoktorSestra::class,
        'admin' => \App\Http\Middleware\Admin::class,
        'adminPersonalIndChck' => \App\Http\Middleware\AdminPersonal::class,
        'admPersNoIndChck' => \App\Http\Middleware\AdminPersonalNoIndexCheck::class,
        'persPacientNoIndChck' => \App\Http\Middleware\PersonalPacientNoIndexCheck::class,
        'doktorSestraPacientIndChck' => \App\Http\Middleware\DoktorSestraPacientIndChck::class,
    ];
}
