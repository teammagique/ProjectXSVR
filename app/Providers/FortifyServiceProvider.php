<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.p
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

         // instruct laravel which view to return for /login request
         Fortify::loginView(fn () => view('auth.login'));

         // instruct laravel which view to return for /register  request
         Fortify::registerView(fn () => view('auth.register'));
 
         // instruct laravel which view to return for /forgot-password  request
         Fortify::requestPasswordResetLinkView(function () {
             return view('auth.forgot-password');
         });
 
         // instruct laravel which view to return for /reset-password  
         Fortify::resetPasswordView(function ($request) {
             return view('auth.reset-password', ['request' => $request]);
         });
         // instruct laravel which view to return for /email/verify 
         Fortify::verifyEmailView(fn () => view('auth.verify-email'));
 
         // instruct laravel which view to return for /user/confirm-password
         Fortify::confirmPasswordView(function () {
             return view('auth.confirm-password');
         });
    }
}
