# wunit/wunit-laravel

方便与laravel框架中对于某一个类的方法调试；类似于单元测试

## 框架要求

Laravel >= 5.1 & PHP > 7.1.3

## 安装

```shell
composer require "wunit/wunit-laravel"
```

## 配置

### Laravel 应用

在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

```php
'providers' => [
    // ...
    Wunit\WunitLaravel\Providers\WunitServiceProvide::class,
]
```

解除路由

```php
Route::get('/', 'WunitController@index');
Route::post('/', 'WunitController@store')->name('wunit.store');
```
