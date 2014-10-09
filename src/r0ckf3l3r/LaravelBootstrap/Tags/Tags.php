<?php namespace r0ckf3l3r\LaravelBootstrap\Tags;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseModel;

class Tags extends EloquentBaseModel
{

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'tags';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array();

    protected $validationRules = [];

}
