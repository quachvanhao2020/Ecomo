<?php
namespace Ecomo\Technology\Media;
use Ecomo\Technology\Media\Storage\ImageModelStorage;

class ImageModel360 extends ImageModel{

    /**
     * 
     *
     * @var ImageModelStorage
     */
    protected $childs;

    /**
     * Get the value of childs
     *
     * @return  ImageModelStorage
     */ 
    public function getChilds()
    {
        return $this->childs;
    }

    /**
     * Set the value of childs
     *
     * @param  ImageModelStorage  $childs
     *
     * @return  self
     */ 
    public function setChilds(ImageModelStorage $childs)
    {
        $this->childs = $childs;

        return $this;
    }
}