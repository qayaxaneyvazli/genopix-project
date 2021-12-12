<?php

use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resource('users', UserController::class);
    $router->resource('trait/list', TraitController::class);
    $router->resource('trait/categories', TraitCategoryController::class);
    $router->resource('trait/results', TraitResultController::class);
    $router->resource('references', ReferenceController::class);
    $router->resource('packages', PackageController::class);
    $router->resource('ethnics', EthnicController::class);

    $router->resource('snps', SnpController::class);
    $router->resource('rsids', RsidController::class);
    $router->resource('effect_allele', EffectAlleleController::class);

    $router->resource('genotypes', GenotypeController::class);


});
