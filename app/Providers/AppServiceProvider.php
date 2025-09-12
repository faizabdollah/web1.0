<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Fournisseur; // <<--- import the model

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share categories with all views
        View::composer('*', function ($view) {
            $view->with('categories', DB::table('categorie_fournisseur_sv')->get());
        });

        // Share logo with all views
        $fournisseur = Fournisseur::first();
        View::share('site_logo', $fournisseur ? $fournisseur->logo : '/images/default-logo.png');
        View::share('map', $fournisseur ? $fournisseur->carte : null);
    }
}
