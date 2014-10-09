<?php namespace r0ckf3l3r\LaravelBootstrap\Abstracts\Traits;
use App;

trait UploadableRelationship
{

    /**
     * The relationship setup for taggable classes
     * @return Eloquent
     */
    public function uploads()
    {
        return $this->morphMany( 'r0ckf3l3r\LaravelBootstrap\Uploads\Uploads' , 'uploadable' )->orderBy('order','asc');
    }

    /**
     * Remove the imagery associated with this model
     * @return void
     */
    public function deleteImagery($id)
    {
        $uploads = App::make('r0ckf3l3r\LaravelBootstrap\Uploads\UploadsInterface');
        $uploads->deleteById( $id );
    }

    /**
     * Remove the imagery associated with this model
     * @return void
     */
    public function deleteAllImagery()
    {
        $uploads = App::make('r0ckf3l3r\LaravelBootstrap\Uploads\UploadsInterface');
        $uploads->deleteByIdType( $this->id , $this->getTableName() );
    }

}