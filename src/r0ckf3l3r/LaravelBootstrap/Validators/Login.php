<?php namespace r0ckf3l3r\LaravelBootstrap\Validators;
use r0ckf3l3r\LaravelBootstrap\Abstracts\ValidatorBase;

class Login extends ValidatorBase
{

    protected $rules = array(
        'email'         =>  'required|email',
        'password'      =>  'required'
    );

}