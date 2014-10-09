<?php

// Get the URL segment to use for routing
$urlSegment = Config::get('laravel-bootstrap::app.access_url');

// Filter all requests ensuring a user is logged in when this filter is called
Route::filter('adminFilter', 'r0ckf3l3r\LaravelBootstrap\Filters\Admin');

Route::controller( $urlSegment.'/users'     , 'r0ckf3l3r\LaravelBootstrap\Controllers\UsersController' );
Route::controller( $urlSegment.'/galleries' , 'r0ckf3l3r\LaravelBootstrap\Controllers\GalleriesController' );
Route::controller( $urlSegment.'/settings'  , 'r0ckf3l3r\LaravelBootstrap\Controllers\SettingsController' );
Route::controller( $urlSegment.'/blocks'    , 'r0ckf3l3r\LaravelBootstrap\Controllers\BlocksController' );
Route::controller( $urlSegment.'/posts'     , 'r0ckf3l3r\LaravelBootstrap\Controllers\PostsController' );
Route::controller( $urlSegment              , 'r0ckf3l3r\LaravelBootstrap\Controllers\DashController'  );

/** Include IOC Bindings **/
include __DIR__.'/bindings.php';