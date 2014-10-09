<?php namespace r0ckf3l3r\LaravelBootstrap\Accounts;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseRepository;

class UserRepository extends EloquentBaseRepository implements UserInterface
{

    /**
     * Construct Shit
     * @param User $user
     */
    public function __construct( User $user )
    {
        $this->model = $user;
    }

}