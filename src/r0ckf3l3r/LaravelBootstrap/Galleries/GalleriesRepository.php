<?php namespace r0ckf3l3r\LaravelBootstrap\Galleries;
use r0ckf3l3r\LaravelBootstrap\Core\EloquentBaseRepository;
use r0ckf3l3r\LaravelBootstrap\Abstracts\Traits\TaggableRepository;

class GalleriesRepository extends EloquentBaseRepository implements GalleriesInterface
{

    use TaggableRepository;

    /**
     * Construct Shit
     * @param Galleries $galleries
     */
    public function __construct( Galleries $galleries )
    {
        $this->model = $galleries;
    }

}