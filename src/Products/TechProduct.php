<?php
namespace Ecomo\Products;

use Ecomo\Products\ProductSocietyXX;
use Ecomo\Tech\PhoneParameter;
use YPHP\Model\Media\ImageRepresent;
use YPHP\Model\Media\Storage\VideoStorage;

class TechProduct extends ProductSocietyXX{
    const PHONEPARAMETER = "phoneParameter";
    const IMAGEREPRESENT = "imageRepresent";
    const CAMERAIMAGEREPRESENT = "cameraImageRepresent";
    const VIDEOS = "videos";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::PHONEPARAMETER => $this->getPhoneParameter(),
            self::IMAGEREPRESENT => $this->getImageRepresent(),
            self::VIDEOS => $this->getVideos(),
            self::CAMERAIMAGEREPRESENT => $this->getCameraImageRepresent(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setPhoneParameter(@$array[self::PHONEPARAMETER]);
        $this->setImageRepresent(@$array[self::IMAGEREPRESENT]);
        $this->setVideos(@$array[self::VIDEOS]);
        $this->setCameraImageRepresent(@$array[self::CAMERAIMAGEREPRESENT]);
    }
            /**
     * 
     *
     * @var string
     */
    protected $phoneParameterHtml;

        /**
     * 
     *
     * @var ImageRepresent
     */
    protected $imageRepresent;

            /**
     * 
     *
     * @var ImageRepresent
     */
    protected $cameraImageRepresent;

            /**
     * 
     *
     * @var VideoStorage
     */
    protected $videos;
    
    /**
     * 
     *
     * @var PhoneParameter
     */
    protected $phoneParameter;

    /**
     * Get the value of phoneParameter
     *
     * @return  PhoneParameter
     */ 
    public function getPhoneParameter()
    {
        return $this->phoneParameter;
    }

    /**
     * Set the value of phoneParameter
     *
     * @param  PhoneParameter  $phoneParameter
     *
     * @return  self
     */ 
    public function setPhoneParameter(PhoneParameter $phoneParameter = null)
    {
        $this->phoneParameter = $phoneParameter;

        return $this;
    }

    /**
     * Get the value of videos
     *
     * @return  VideoStorage
     */ 
    public function getVideos()
    {
        return $this->videos;
    }

    /**
     * Set the value of videos
     *
     * @param  VideoStorage  $videos
     *
     * @return  self
     */ 
    public function setVideos(VideoStorage $videos = null)
    {
        $this->videos = $videos;

        return $this;
    }

    /**
     * Get the value of cameraImageRepresent
     *
     * @return  ImageRepresent
     */ 
    public function getCameraImageRepresent()
    {
        return $this->cameraImageRepresent;
    }

    /**
     * Set the value of cameraImageRepresent
     *
     * @param  ImageRepresent  $cameraImageRepresent
     *
     * @return  self
     */ 
    public function setCameraImageRepresent(ImageRepresent $cameraImageRepresent = null)
    {
        $this->cameraImageRepresent = $cameraImageRepresent;

        return $this;
    }

    /**
     * Get the value of imageRepresent
     *
     * @return  ImageRepresent
     */ 
    public function getImageRepresent()
    {
        return $this->imageRepresent;
    }

    /**
     * Set the value of imageRepresent
     *
     * @param  ImageRepresent  $imageRepresent
     *
     * @return  self
     */ 
    public function setImageRepresent(ImageRepresent $imageRepresent = null)
    {
        $this->imageRepresent = $imageRepresent;

        return $this;
    }

    /**
     * Get the value of phoneParameterHtml
     *
     * @return  string
     */ 
    public function getPhoneParameterHtml()
    {
        return $this->phoneParameterHtml;
    }

    /**
     * Set the value of phoneParameterHtml
     *
     * @param  string  $phoneParameterHtml
     *
     * @return  self
     */ 
    public function setPhoneParameterHtml(string $phoneParameterHtml = null)
    {
        $this->phoneParameterHtml = $phoneParameterHtml;

        return $this;
    }
}