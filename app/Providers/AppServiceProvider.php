<?php

namespace App\Providers;

use App\Models\Menus;
use App\Models\Pages;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
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
        $backMainMenus = Menus::select('menu_id','menu_tittle','url','sub_menu','sort_order')->where('parent_id','0')->where('status','Y')->orderBy('sort_order')->get()->keyBy('menu_id')->toArray();
        $subMainMenus = Menus::select('menu_id','menu_tittle','url','parent_id')->where('parent_id','!=','0')->where('status','Y')->orderBy('sort_order')->get()->keyBy('menu_id')->toArray();
        foreach ($backMainMenus as $key=>$backMainMenu){
            if($backMainMenu['sub_menu'] == 'Y'){
                foreach ($subMainMenus as $subKey=>$subMainMenu){
                    if($backMainMenu['menu_id'] == $subMainMenu['parent_id']){
                        $backMainMenus[$key]['subMenuDetails'][$subKey] = $subMainMenu;
                    }
                }
            }
        }
        $backMainPages = Pages::select('page_id','page_name','page_type')->where('parent_id','0')->where('status','Y')->get()->toArray();
//        print_r($backMainMenus);
//        die();
        $backDataMenu = [
            'backMenus' => $backMainMenus,
            'backMainPages' => $backMainPages
        ];

        View::composer('*', function ($view) use ($backDataMenu) {
            $view->with(compact('backDataMenu'));
        });
    }
}
