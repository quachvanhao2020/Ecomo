<?php
namespace Ecomo\Tech;

use YPHP\Entity;
use YPHP\Model\Media\Storage\ImageStorage;

class Characteristics extends Entity{

    const IMAGES = "images";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::IMAGES => $this->getImages(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setImages(\tran(@$array[self::IMAGES],ImageStorage::class));
    }

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