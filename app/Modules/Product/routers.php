

<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Product\Controllers\ProductController;

$namespace = 'App\Modules\Product\Controllers';
// Route::get('/product', [ProductController::class, 'index']);
Route::group(
    ['module' => 'Product', 'namespace' => $namespace],
    function () {
        Route::get('product', [
            # middle here
            'as' => 'index',
            'uses' => 'ProductController@index'
        ]);
    }
);
