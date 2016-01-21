<?php
/**
 * Created by PhpStorm.
 * User: salmah
 * Date: 1/21/16
 * Time: 11:12 PM
 */

namespace SalmaAbdelhady\RoomsXML\Model;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Tests\Fixtures\Person;

/**
 * Class Guests
 * @package SalmaAbdelhady\RoomsXML\Model
 * @XmlRoot(name="Guests")
 */
class Guests
{
    /**
     * @var
     * @SerializedName(name="Adult")
     * @XmlList(inline=true,entry="Adult")
     * @Type(name="ArrayCollection<SalmaAbdelhady\RoomsXML\Model\Person>")
     */
    private $Adults;

    /**
     * @var
     * @SerializedName(name="Adult")
     * @XmlList(inline=true,entry="Adult")
     * @Type(name="ArrayCollection<SalmaAbdelhady\RoomsXML\Model\Person>")
     */
    private $Children;


    public function __construct()
    {
        $this->Adults   = new ArrayCollection();
        $this->Children = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getAdults()
    {
        return $this->Adults;
    }

    /**
     * @param mixed $Adults
     */
    public function setAdults(ArrayCollection $Adults)
    {
        $this->Adults = $Adults;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param mixed $Children
     */
    public function setChildren(ArrayCollection $Children)
    {
        $this->Children = $Children;
    }

    /**
     * @param Person $child
     */
    public function addChild(Person $child)
    {
        $this->Children->add($child);
    }

    /**
     * @param Person $adult
     */
    public function addAdult(Person $adult)
    {
        $this->Adults->add($adult);
    }

}