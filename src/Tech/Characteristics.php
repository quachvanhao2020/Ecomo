<?php
namespace Ecomo\Tech;
use YPHP\Model\Media\Storage\ImageStorage;

class Characteristics{

        /**
     * 
     *
     * @var ImageStorage
     */
    protected $images;

    /**
     * Get the value of images
     *
     * @return  ImageStorage
     */ 
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set the value of images
     *
     * @param  ImageStorage  $images
     *
     * @return  self
     */ 
    public function setImages(ImageStorage $images = null)
    {
        $this->images = $images;

        return $this;
    }
}