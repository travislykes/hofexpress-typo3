<?php
namespace Hulk\Hofexpress\Domain\Model;


/***
 *
 * This file is part of the "HofExpress" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Restaurant
 */
class Restaurant extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * description
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * logo
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $logo = null;

    /**
     * address
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $address = '';

    /**
     * restaurantType
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $restaurantType = '';

    /**
     * coverImage
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $coverImage = null;

    /**
     * menu
     * 
     * @var \Hulk\Hofexpress\Domain\Model\RestaurantMenu
     */
    protected $menu = null;

    /**
     * food
     * 
     * @var \Hulk\Hofexpress\Domain\Model\Food
     */
    protected $food = null;

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the logo
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets the logo
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }

    /**
     * Returns the address
     * 
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     * 
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Returns the restaurantType
     * 
     * @return string $restaurantType
     */
    public function getRestaurantType()
    {
        return $this->restaurantType;
    }

    /**
     * Sets the restaurantType
     * 
     * @param string $restaurantType
     * @return void
     */
    public function setRestaurantType($restaurantType)
    {
        $this->restaurantType = $restaurantType;
    }

    /**
     * Returns the name
     * 
     * @return string name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the coverImage
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $coverImage
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * Sets the coverImage
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $coverImage
     * @return void
     */
    public function setCoverImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $coverImage)
    {
        $this->coverImage = $coverImage;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
    }

    /**
     * Returns the menu
     * 
     * @return \Hulk\Hofexpress\Domain\Model\RestaurantMenu $menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Sets the menu
     * 
     * @param \Hulk\Hofexpress\Domain\Model\RestaurantMenu $menu
     * @return void
     */
    public function setMenu(\Hulk\Hofexpress\Domain\Model\RestaurantMenu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * Returns the food
     * 
     * @return \Hulk\Hofexpress\Domain\Model\Food $food
     */
    public function getFood()
    {
        return $this->food;
    }

    /**
     * Sets the food
     * 
     * @param \Hulk\Hofexpress\Domain\Model\Food $food
     * @return void
     */
    public function setFood(\Hulk\Hofexpress\Domain\Model\Food $food)
    {
        $this->food = $food;
    }
}
