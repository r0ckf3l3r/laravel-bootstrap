<?php namespace r0ckf3l3r\LaravelBootstrap\Posts;

interface PostsInterface {

    /**
     * Get all posts by date published ascending
     * @return Posts
     */
    public function getAllByDateAsc();

    /**
     * Get all posts by date published descending
     * @return Posts
     */
    public function getAllByDateDesc();

}