<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Groupes
 *
 * @ORM\Table(name="groupes")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\GroupesRepository")
 */
class Groupes
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
     * @var int
     *
     * @ORM\Column(name="lon", type="float", nullable=true)
     */
    private $lon;

    /**
     * @var int
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
     * @var int
     *
     * @ORM\Column(name="meetupid", type="integer", nullable=true)
     */
    private $meetupid;

    /**
     * @ORM\ManyToOne(targetEntity="Villes", inversedBy="groupes")
     * @ORM\JoinColumn(name="villes_id", referencedColumnName="id")
     */
    private $villes;

    /**
     * Get id
     *
     * @return integer
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
     * @return Groupes
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
     * @return Groupes
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
     * @return Groupes
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lon
     *
     * @param string $lon
     *
     * @return Groupes
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lat
     *
     * @param string $lat
     *
     * @return Groupes
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
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
     * @return Groupes
     */
    public function setMembers($members)
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Get members
     *
     * @return integer
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
     * @return Groupes
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
     * Set villes
     *
     * @param \MeetupBundle\Entity\Villes $villes
     *
     * @return Groupes
     */
    public function setVilles(\MeetupBundle\Entity\Villes $villes = null)
    {
        $this->villes = $villes;

        return $this;
    }

    /**
     * Get villes
     *
     * @return \MeetupBundle\Entity\Villes
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * Set groupesTopics
     *
     * @param \MeetupBundle\Entity\Groupes_Topics $groupesTopics
     *
     * @return Groupes
     */
    public function setGroupesTopics(\MeetupBundle\Entity\Groupes_Topics $groupesTopics = null)
    {
        $this->groupes_topics = $groupesTopics;

        return $this;
    }

    /**
     * Get groupesTopics
     *
     * @return \MeetupBundle\Entity\Groupes_Topics
     */
    public function getGroupesTopics()
    {
        return $this->groupes_topics;
    }

    /**
     * Set meetupid
     *
     * @param integer $meetupid
     *
     * @return Groupes
     */
    public function setMeetupid($meetupid)
    {
        $this->meetupid = $meetupid;

        return $this;
    }

    /**
     * Get meetupid
     *
     * @return integer
     */
    public function getMeetupid()
    {
        return $this->meetupid;
    }

    /**
     * Set meetuptopicid
     *
     * @param integer $meetuptopicid
     *
     * @return Groupes
     */
    public function setMeetuptopicid($meetuptopicid)
    {
        $this->meetuptopicid = $meetuptopicid;

        return $this;
    }

    /**
     * Get meetuptopicid
     *
     * @return integer
     */
    public function getMeetuptopicid()
    {
        return $this->meetuptopicid;
    }
}
