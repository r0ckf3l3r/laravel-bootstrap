<?php namespace r0ckf3l3r\LaravelBootstrap\Controllers;
use r0ckf3l3r\LaravelBootstrap\Blocks\BlocksInterface;

class BlocksController extends ObjectBaseController {

    /**
     * The place to find the views / URL keys for this controller
     * @var string
     */
    protected $view_key = 'blocks';

    /**
     * Construct Shit
     */
    public function __construct( BlocksInterface $blocks )
    {
        $this->model = $blocks;
        parent::__construct();
    }

}