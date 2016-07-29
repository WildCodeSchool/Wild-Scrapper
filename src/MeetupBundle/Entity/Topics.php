<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topics
 *
 * @ORM\Table(name="topics")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\TopicsRepository")
 */
class Topics
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
     * @var int
     *
     * @ORM\Column(name="id_groupes", type="integer", nullable=true, unique=true)
     */
    private $idGroupes;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


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
     * Set idGroupes
     *
     * @param integer $idGroupes
     * @return Topics
     */
    public function setIdGroupes($idGroupes)
    {
        $this->idGroupes = $idGroupes;

        return $this;
    }

    /**
     * Get idGroupes
     *
     * @return integer
     */
    public function getIdGroupes()
    {
        return $this->idGroupes;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Topics
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groupes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add groupe
     *
     * @param \MeetupBundle\Entity\Groupes $groupe
     *
     * @return Topics
     */
    public function addGroupe(\MeetupBundle\Entity\Groupes $groupe)
    {
        $this->groupes[] = $groupe;
    
        return $this;
    }

    /**
     * Remove groupe
     *
     * @param \MeetupBundle\Entity\Groupes $groupe
     */
    public function removeGroupe(\MeetupBundle\Entity\Groupes $groupe)
    {
        $this->groupes->removeElement($groupe);
    }

    /**
     * Get groupes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupes()
    {
        return $this->groupes;
    }
}
