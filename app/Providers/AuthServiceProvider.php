<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use LdapRecord\Laravel\Auth\BindFailureListener;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        BindFailureListener::setErrorHandler(function ($message, $code = null) {
            dd($code);
            if ($code == '773') {
                // The users password has expired. Redirect them.
                abort(redirect('/password-reset'));
            }
        });

        Fortify::authenticateUsing(function ($request) {
            $validated = Auth::validate([
                'userprincipalname' => $request->email,
                'password' => $request->password,
            ]);

            if($validated){
                $request->validate([
                    'password' => [new \Valorin\Pwned\Pwned],
                ]);
                return Auth::getLastAttempted();
            }

            return null;
        });

        
    }
}
