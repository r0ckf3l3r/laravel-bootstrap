<?php namespace r0ckf3l3r\LaravelBootstrap\Galleries;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseModel;
use r0ckf3l3r\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use r0ckf3l3r\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Galleries extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'galleries';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('title', 'slug', 'description');

    protected $validationRules = [
        'title'     => 'required',
        'slug'      => 'required|unique:galleries,id,<id>'
    ];

}
