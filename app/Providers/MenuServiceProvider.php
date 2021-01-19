<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

      
        
        $verticalMenuJson = file_get_contents(base_path('resources/json/verticalMenuPartner.json'));
        
        $verticalMenuJsonPartner = file_get_contents(base_path('resources/json/verticalMenu.json'));
     
        
        $verticalMenuData= json_decode($verticalMenuJson);
        $verticalMenuJsonPartnerData = json_decode($verticalMenuJsonPartner);
        $horizontalMenuJson=file_get_contents(base_path('resources/json/horizontalMenu.json'));
        $horizontalMenuData= json_decode($horizontalMenuJson);

        // share all menuData to all the views
        \View::share('menuData',[$verticalMenuJsonPartnerData,$verticalMenuData, $horizontalMenuData]);
    }
}
