<?php namespace r0ckf3l3r\LaravelBootstrap\Tags;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseRepository;

class TagsRepository extends EloquentBaseRepository implements TagsInterface
{

    /**
     * Construct Shit
     * @param Tags $tags
     */
    public function __construct( Tags $tags )
    {
        $this->model = $tags;
    }

}