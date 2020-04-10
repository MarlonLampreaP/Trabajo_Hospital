<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administrar-usuarios', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('editar-usuario', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('eliminar-usuario', function($user) {
            return $user->hasRol('admin');
        });

        Gate::define('registrar-medico', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('eliminar-medico', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('editar-medico', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('crear-laboratorio', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('editar-laboratorio', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('eliminar-laboratorio', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('crear-consulta', function($user) {
            return $user->hasRol(['medico']);
        });
        Gate::define('editar-consulta', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('eliminar-consulta', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('crear-hospital', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('editar-hospital', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('eliminar-hospital', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('eliminar-sala', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('crear-sala', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('editar-sala', function($user) {
            return $user->hasRol(['admin']);
        });

        Gate::define('registrar-paciente', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('diagnostico-paciente', function($user) {
          return $user->hasRol(['medico']);
        });
        Gate::define('editar-paciente', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('editar-diagnostico', function($user) {
            return $user->hasRol(['medico']);
        });
        Gate::define('eliminar-paciente', function($user) {
            return $user->hasRol(['admin']);
        });
        Gate::define('crear-diagnostico', function($user) {
            return $user->hasRol(['medico']);
        });
        Gate::define('eliminar-diagnostico', function($user) {
            return $user->hasRol(['medico']);
        });
        Gate::define('hospital-entrada', function($user) {
            return $user->hasAnyRol(['admin','medico','paciente']);
        });
        Gate::define('consulta-entrada', function($user) {
            return $user->hasAnyRol(['admin','medico','paciente']);
        });
        Gate::define('medico-entrada', function($user) {
            return $user->hasAnyRol(['admin','medico','paciente']);
        });
        Gate::define('paciente-entrada', function($user) {
            return $user->hasAnyRol(['admin','medico','paciente']);
        });
        Gate::define('laboratorio-entrada', function($user) {
            return $user->hasAnyRol(['admin','medico','paciente']);
        });
        Gate::define('sala-entrada', function($user) {
            return $user->hasAnyRol(['admin','medico','paciente']);
        });
    }
}
