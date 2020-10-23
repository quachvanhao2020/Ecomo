<?php
namespace Ecomo\ECommerce;

use TGDDFace\Traits\RefJsonSerializeTrait;

use Ecomo\Entity;
use Ecomo\Technology\Media\VideoModel;
use Ecomo\Technology\Media\ImageModel360;
use Ecomo\Technology\PhoneParameterModel;
use Ecomo\ECommerce\Storage\ProductStorage;
use Ecomo\Communication\Storage\CommentStorage;
use Ecomo\Technology\Media\ImageModel;
use Ecomo\ECommerce\Tech\CharacteristicsModel;
use Ecomo\Society\NormalArticle;
use Ecomo\Society\NewsList;
use Ecomo\Technology\Storage\SkinModelStorage;
use Ecomo\Products\Product;

class NormalProduct extends Product{

    const COMMENTS = "comments";
    const SKINS = "skins";
    const PRODUCT = "product";
    const VIDEO = "video";
    const IMAGEMODEL360 = "imageModel360";
    const COMBOS = "combos";
    const PHONEPARAMETER = "phoneParameter";
    const CHARACTERISTICS = "characteristics";
    const ARTICLE = "article";
    const COMPARES = "compares";
    const NEWSLIST = "newsList";
    const ACCESSORIES = "accessories";
    const IMAGE = "image";

    public function __toArray() {
        return array_merge(parent::__toArray(),[
            self::IMAGE => $this->getImage(),
            self::PRODUCT => $this->getProduct(),
            self::SKINS => $this->getSkins(),
            self::VIDEO => $this->getVideo(),
            self::IMAGEMODEL360 => $this->getImageModel360(),
            self::COMBOS => $this->getCombos(),
            self::PHONEPARAMETER => $this->getPhoneParameter(),
            self::CHARACTERISTICS => $this->getCharacteristics(),
            self::ARTICLE => $this->getArticle(),
            self::COMPARES => $this->getCompares(),
            self::NEWSLIST => $this->getNewsList(),
            self::ACCESSORIES => $this->getAccessories(),
            self::COMMENTS => $this->getComments(),
        ]);
    }

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * 
     *
     * @var ImageModel
     */
    protected $image;
    /**
     * 
     *
     * @var string
     */
    protected $comments;

    /**
     * 
     *
     * @var string
     */
    protected $skins;

        /**
     * 
     *
     * @var VideoModel
     */
    protected $video;

    /**
     * 
     *
     * @var ImageModel360
     */
    protected $imageModel360;

    /**
     * 
     *
     * @var string
     */
    protected $combos;

    /**
     * 
     *
     * @var PhoneParameterModel
     */
    protected $phoneParameter;
    
        /**
     * 
     *
     * @var CharacteristicsModel
     */
    protected $characteristics;

    /**
     * 
     *
     * @var NormalArticle
     */
    protected $article;

    /**
     * 
     *
     * @var string
     */
    protected $compares;

    /**
     * 
     *
     * @var NewsList
     */
    protected $newsList;

    /**
     * 
     *
     * @var string
     */
    protected $accessories;

    /**
     * Get the value of video
     *
     * @return  VideoModel
     */ 
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set the value of video
     *
     * @param  VideoModel  $video
     *
     * @return  self
     */ 
    public function setVideo(VideoModel $video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get the value of imageModel360
     *
     * @return  ImageModel360
     */ 
    public function getImageModel360()
    {
        return $this->imageModel360;
    }

    /**
     * Set the value of imageModel360
     *
     * @param  ImageModel360  $imageModel360
     *
     * @return  self
     */ 
    public function setImageModel360(ImageModel360 $imageModel360)
    {
        $this->imageModel360 = $imageModel360;

        return $this;
    }

    /**
     * Get the value of phoneParameter
     *
     * @return  PhoneParameterModel
     */ 
    public function getPhoneParameter()
    {
        return $this->phoneParameter;
    }

    /**
     * Set the value of phoneParameter
     *
     * @param  PhoneParameterModel  $phoneParameter
     *
     * @return  self
     */ 
    public function setPhoneParameter(PhoneParameterModel $phoneParameter)
    {
        $this->phoneParameter = $phoneParameter;

        return $this;
    }

    /**
     * Get the value of characteristics
     *
     * @return  CharacteristicsModel
     */ 
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Set the value of characteristics
     *
     * @param  CharacteristicsModel  $characteristics
     *
     * @return  self
     */ 
    public function setCharacteristics(CharacteristicsModel $characteristics)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Get the value of article
     *
     * @return  NormalArticle
     */ 
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set the value of article
     *
     * @param  NormalArticle  $article
     *
     * @return  self
     */ 
    public function setArticle(NormalArticle $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get the value of combos
     *
     * @return  ProductStorage
     */ 
    public function getCombos()
    {
        return $this->combos;
    }

    /**
     * Set the value of combos
     *
     * @param  string[]  $combos
     *
     * @return  self
     */ 
    public function setCombos($combos)
    {
        foreach ($combos as $key => $combo) {
            //$combo->impact($this->getProduct(),__METHOD__);
        }
        $this->combos = $combos;
        return $this;
    }

    public function refJsonSerialize($array){

        foreach ($array as $key => $value) {
            
            if($value instanceof Entity){

                $array[$key] = get_class($value)."-".$value->getId();
 
            }

        }

        return $array;

    }

    /**
     * Get the value of product
     *
     * @return  Product
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @param  Product  $product
     *
     * @return  self
     */ 
    public function setProduct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of newsList
     *
     * @return  NewsList
     */ 
    public function getNewsList()
    {
        return $this->newsList;
    }

    /**
     * Set the value of newsList
     *
     * @param  NewsList  $newsList
     *
     * @return  self
     */ 
    public function setNewsList(NewsList $newsList = null)
    {
        $this->newsList = $newsList;

        return $this;
    }

    /**
     * Get the value of comments
     *
     * @return  CommentStorage
     */ 
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @param  string[]  $comments
     *
     * @return  self
     */ 
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get the value of skins
     *
     * @return  SkinModelStorage
     */ 
    public function getSkins()
    {
        return $this->skins;
    }

    /**
     * Set the value of skins
     *
     * @param  string[]  $skins
     *
     * @return  self
     */ 
    public function setSkins($skins)
    {
        $this->skins = $skins;

        return $this;
    }

    /**
     * Get the value of accessories
     *
     * @return  ProductStorage
     */ 
    public function getAccessories()
    {
        return $this->accessories;
    }

    /**
     * Set the value of accessories
     *
     * @param  string  $accessories
     *
     * @return  self
     */ 
    public function setAccessories($accessories)
    {
        $this->accessories = $accessories;

        return $this;
    }

    /**
     * Get the value of compares
     *
     * @return  ProductStorage
     */ 
    public function getCompares()
    {
        return $this->compares;
    }

    /**
     * Set the value of compares
     *
     * @param  string  $compares
     *
     * @return  self
     */ 
    public function setCompares($compares)
    {
        $this->compares = $compares;

        return $this;
    }
}