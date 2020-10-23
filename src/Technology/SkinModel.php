<?php
namespace UltimateModel\ECommerce\Tech;
use UltimateModel\Technology\Media\ImageModel;
use UltimateModel\Technology\Media\Storage\ImageModelStorage;

class SkinModel extends ImageModel{

    const COLOR = "color";
            /**
     * 
     *
     * @var string
     */
    protected $color;
        /**
     * 
     *
     * @var ImageModel
     */
    protected $icon;

    /**
     * 
     *
     * @var ImageModelStorage
     */
    protected $childs;

    public static function propertySpecificity(){
        return self::COLOR;
    }

    /**
     * Get the value of icon
     *
     * @return  ImageModel
     */ 
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     *
     * @param  ImageModel  $icon
     *
     * @return  self
     */ 
    public function setIcon(ImageModel $icon)
    {
        $this->icon = $icon;

        return $this;
    }


    /**
     * Get the value of color
     *
     * @return  string
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param  string  $color
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

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