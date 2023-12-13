<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;



// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(GateContract $gate): void
    {
        $this->registerPolicies($gate);
        $gate->define('IsAdmin',function($user){
            return $user->user_type == 'admin';
        });
        $gate->define('IsUser',function($user){
            return $user->user_type == 'user';
        });
       
        // Gate::define('update-post', function (User $user) {
        //     return $user->id === $user->user_id;
        // });
       
    }
}
