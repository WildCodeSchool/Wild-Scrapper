<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupePhpRetro
 *
 * @ORM\Table(name="groupe_php_retro")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\GroupePhpRetroRepository")
 */
class GroupePhpRetro
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="created", type="bigint", nullable=true)
     */
    private $created;

    /**
     * @var float
     *
     * @ORM\Column(name="lon", type="float", nullable=true)
     */
    private $lon;

    /**
     * @var float
     *
     * @ORM\Column(name="lat", type="float", nullable=true)
     */
    private $lat;

    /**
     * @var int
     *
     * @ORM\Column(name="members", type="integer", nullable=true)
     */
    private $members;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=255, nullable=true)
     */
    private $topic;

    /**
     * @var string
     *
     * @ORM\Column(name="meetupId", type="integer", length=255, nullable=true)
     */
    private $meetupId;

    /**
     * @var int
     *
     * @ORM\Column(name="createdAt", type="bigint", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->date = time();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return GroupePhpRetro
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return GroupePhpRetro
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set created
     *
     * @param integer $created
     *
     * @return GroupePhpRetro
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lon
     *
     * @param float $lon
     *
     * @return GroupePhpRetro
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return float
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lat
     *
     * @param float $lat
     *
     * @return GroupePhpRetro
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set members
     *
     * @param integer $members
     *
     * @return GroupePhpRetro
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return int
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return GroupePhpRetro
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set topic
     *
     * @param string $topic
     *
     * @return GroupePhpRetro
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * Get topic
     *
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set meetupId
     *
     * @param string $meetupId
     *
     * @return GroupePhpRetro
     */
    public function setMeetupId($meetupId)
    {
        $this->meetupId = $meetupId;

        return $this;
    }

    /**
     * Get meetupId
     *
     * @return string
     */
    public function getMeetupId()
    {
        return $this->meetupId;
    }

    /**
     * Set date
     *
     * @param integer $date
     *
     * @return GroupePhpRetro
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }
}
