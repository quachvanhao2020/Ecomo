<?php
namespace Ecomo\Category;
use Doctrine\ORM\Mapping as ORM;
use YPHP\EntityFertility;
use YPHP\Model\Stream\Image;
use Ecomo\Product\Storage\ProductStorage;
use Ecomo\Product\Storage\ProductStorageInterface;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="categorys")
 */
class Category extends EntityFertility{

    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;

    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="Ecomo\Category\Category", inversedBy="children",cascade={"persist"})
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parent;

    /**
     * One Category has Many Categories.
     * @ORM\OneToMany(targetEntity="Ecomo\Category\Category", mappedBy="parent")
     */
    protected $children;

    const LOGO = "logo";
    const SLUG = "slug";
    const PRODUCTS = "products";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::LOGO => $this->getLogo(),
            self::SLUG => $this->getSlug(),
            self::PRODUCTS => $this->getProducts(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setLogo(\tran(@$array[self::LOGO],Image::class));
        $this->setSlug(@$array[self::SLUG]);
        $this->setProducts(\tran(@$array[self::PRODUCTS],ProductStorage::class));
    }

    /**
     * @ORM\ManyToOne(targetEntity="YPHP\Model\Stream\Image",cascade={"persist"})
     * @var Image
     */
    protected $logo;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $slug;

    /**
     * @ORM\ManyToMany(targetEntity="Ecomo\Product\Product")
     * @var ProductStorage
     */
    protected $products;

    public function __construct(string $id = null)
    {
        parent::__construct($id);
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get the value of logo
     *
     * @return  Image
     */ 
    public function getLogo()
    {
        if(!$this->logo) $this->logo = new Image();
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  Image  $logo
     *
     * @return  self
     */ 
    public function setLogo(Image $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of products
     *
     * @return  ProductStorage
     */ 
    public function getProducts()
    {
        if(!$this->products) $this->products = new ProductStorage();
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  \Ecomo\Product\Storage\ProductStorage  $products
     *
     * @return  self
     */ 
    public function setProducts(ProductStorageInterface $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of slug
     *
     * @return  string
     */ 
    public function getSlug()
    {
        if(!$this->slug) $this->slug = "";
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @param  string  $slug
     *
     * @return  self
     */ 
    public function setSlug(string $slug = null)
    {
        $this->slug = $slug;

        return $this;
    }
}