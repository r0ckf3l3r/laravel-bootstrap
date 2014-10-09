<?php namespace r0ckf3l3r\LaravelBootstrap\Blocks;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseModel;
use r0ckf3l3r\LaravelBootstrap\Abstracts\Traits\TaggableRelationship;
use r0ckf3l3r\LaravelBootstrap\Abstracts\Traits\UploadableRelationship;

class Blocks extends EloquentBaseModel
{

    use TaggableRelationship; // Enable The Tags Relationships
    use UploadableRelationship; // Enable The Uploads Relationships

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'blocks';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array('title', 'key', 'content');

    protected $validationRules = [
        'title'     => 'required',
        'key'      => 'required|unique:blocks,id,<id>',
        'content'   => 'required'
    ];

}
