<?php
namespace Wunit\WunitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class WunitServiceProvide extends ServiceProvider
{   
    
    public function register()
    {   
        //注册组件路由
        $this->registerRoutes();
        //指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'wunit'
        );
    }

    public function boot()
    {   

    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            //定义访问路由的域名
            'namespace' => 'Wunit\WunitLaravel\Http\Controllers',
            //这是前缀
            'prefix' => 'wunit',
            //这是中间件
            'middleware' => 'web'

        ];
    }

}
?>