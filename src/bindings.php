<?php

// The Posts Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Posts\PostsInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Posts\PostsRepository( new r0ckf3l3r\LaravelBootstrap\Posts\Posts );
});

// The Users Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Accounts\UserInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Accounts\UserRepository( new r0ckf3l3r\LaravelBootstrap\Accounts\User );
});

// The Settings Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Settings\SettingsInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Settings\SettingsRepository( new r0ckf3l3r\LaravelBootstrap\Settings\Settings );
});

// The Blocks Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Blocks\BlocksInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Blocks\BlocksRepository( new r0ckf3l3r\LaravelBootstrap\Blocks\Blocks );
});

// The Tags Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Tags\TagsInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Tags\TagsRepository( new r0ckf3l3r\LaravelBootstrap\Tags\Tags );
});

// The Uploads Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Uploads\UploadsInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Uploads\UploadsRepository( new r0ckf3l3r\LaravelBootstrap\Uploads\Uploads );
});

// The Galleries Bindings
App::bind('r0ckf3l3r\LaravelBootstrap\Galleries\GalleriesInterface', function(){
    return new r0ckf3l3r\LaravelBootstrap\Galleries\GalleriesRepository( new r0ckf3l3r\LaravelBootstrap\Galleries\Galleries );
});
