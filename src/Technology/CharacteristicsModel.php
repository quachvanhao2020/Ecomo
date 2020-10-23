<?php
namespace UltimateModel\ECommerce\Tech;

use Ecomo\Technology\Media\Storage\ImageModelStorage;

class CharacteristicsModel{

        /**
     * 
     *
     * @var ImageModelStorage
     */
    protected $images;

    /**
     * Get the value of images
     *
     * @return  ImageModelStorage
     */ 
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set the value of images
     *
     * @param  ImageModelStorage  $images
     *
     * @return  self
     */ 
    public function setImages(ImageModelStorage $images = null)
    {
        $this->images = $images;

        return $this;
    }
}