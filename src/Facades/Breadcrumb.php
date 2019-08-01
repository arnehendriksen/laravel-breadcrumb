<?php namespace arnehendriksen\LaravelBreadcrumb\Facades;

use Illuminate\Support\Facades\Facade;
use arnehendriksen\LaravelBreadcrumb\Breadcrumb as LaravelBreadcrumb;

class Breadcrumb extends Facade {

    protected static function getFacadeAccessor() { return LaravelBreadcrumb::class; }

}
