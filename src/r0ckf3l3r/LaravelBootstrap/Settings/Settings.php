<?php namespace r0ckf3l3r\LaravelBootstrap\Settings;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseModel;

class Settings extends EloquentBaseModel
{

    /**
     * The table to get the data from
     * @var string
     */
    protected $table    = 'settings';

    /**
     * These are the mass-assignable keys
     * @var array
     */
    protected $fillable = array( 'id' , 'value');

    protected $validationRules = [
        'id'      => 'required|exists:settings',
        'value'   => 'required'
    ];

}
