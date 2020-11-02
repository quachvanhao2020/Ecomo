<?php
namespace Ecomo\Products;

use YPHP\Entity;
use Ecomo\ECommerce\Storage\ProductStorage;
use Ecomo\Tech\Characteristics;
use Societymo\NewsList;
use Societymo\ArticleXX;
use Ecomo\Products\ProductSociety;
use YPHP\Model\Media\Image;
use YPHP\Model\Media\Video;
use YPHP\Model\Media\Image360;

class ProductSocietyXX extends ProductSocietyX{

    const VIDEO = "video";
    const IMAGE360 = "image360";
    const COMBOS = "combos";
    const CHARACTERISTICS = "characteristics";
    const ARTICLE = "article";
    const NEWSLIST = "newsList";
    const ACCESSORIES = "accessories";

    public function __toArray() {
        return array_merge(parent::__toArray(),[
            self::VIDEO => $this->getVideo(),
            self::IMAGE360 => $this->getImage360(),
            self::COMBOS => $this->getCombos(),
            self::CHARACTERISTICS => $this->getCharacteristics(),
            self::ARTICLE => $this->getArticle(),
            self::NEWSLIST => $this->getNewsList(),
            self::ACCESSORIES => $this->getAccessories(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setVideo(\tran(@$array[self::VIDEO],Video::class));
        $this->setImage360(\tran(@$array[self::IMAGE360],Image360::class));
        $this->setCombos(@$array[self::COMBOS]);
        $this->setCharacteristics(\tran(@$array[self::CHARACTERISTICS],Characteristics::class));
        $this->setArticle(\tran(@$array[self::ARTICLE],ArticleXX::class));
        $this->setNewsList(\tran(@$array[self::NEWSLIST],NewsList::class));
        $this->setAccessories(@$array[self::ACCESSORIES]);
    }


        /**
     * 
     *
     * @var Video
     */
    protected $video;

    /**
     * 
     *
     * @var Image360
     */
    protected $image360;

    /**
     * 
     *
     * @var string
     */
    protected $combos;

    
    /**
     * 
     *
     * @var Characteristics
     */
    protected $characteristics;

    /**
     * 
     *
     * @var ArticleXX
     */
    protected $article;


    /**
     * 
     *
     * @var NewsList
     */
    protected $newsList;

    /**
     * 
     *
     * @var ProductStorage
     */
    protected $accessories;

    /**
     * Get the value of video
     *
     * @return  Video
     */ 
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set the value of video
     *
     * @param  Video  $video
     *
     * @return  self
     */ 
    public function setVideo(Video $video = null)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get the value of Image360
     *
     * @return  Image360
     */ 
    public function getImage360()
    {
        return $this->Image360;
    }

    /**
     * Set the value of Image360
     *
     * @param  Image360  $Image360
     *
     * @return  self
     */ 
    public function setImage360(Image360 $Image360 = null)
    {
        $this->Image360 = $Image360;

        return $this;
    }

    /**
     * Get the value of characteristics
     *
     * @return  Characteristics
     */ 
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Set the value of characteristics
     *
     * @param  Characteristics  $characteristics
     *
     * @return  self
     */ 
    public function setCharacteristics(Characteristics $characteristics = null)
    {
        $this->characteristics = $characteristics;

        return $this;
    }

    /**
     * Get the value of article
     *
     * @return  ArticleXX
     */ 
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set the value of article
     *
     * @param  ArticleXX  $article
     *
     * @return  self
     */ 
    public function setArticle(ArticleXX $article = null)
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

}