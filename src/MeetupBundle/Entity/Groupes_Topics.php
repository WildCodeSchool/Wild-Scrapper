<?php

namespace MeetupBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes_Topics
 *
 * @ORM\Table(name="groupes__topics")
 * @ORM\Entity(repositoryClass="MeetupBundle\Repository\Groupes_TopicsRepository")
 */
class Groupes_Topics
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
     * @ORM\OneToOne(targetEntity="Groupes", inversedBy="groupes_topics")
     * @ORM\JoinColumn(name="groupe_id", referencedColumnName="id")
     */
    private $groupes;

    /**
     * @ORM\OneToOne(targetEntity="Topics", inversedBy="groupes_topics")
     * @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
     */
    private $topics;


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
     *
     * @return Groupes_Topics
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
     * Set idTopics
     *
     * @param integer $idTopics
     *
     * @return Groupes_Topics
     */
    public function setIdTopics($idTopics)
    {
        $this->idTopics = $idTopics;

        return $this;
    }

    /**
     * Get idTopics
     *
     * @return integer
     */
    public function getIdTopics()
    {
        return $this->idTopics;
    }

    /**
     * Set groupes
     *
     * @param \MeetupBundle\Entity\Groupes $groupes
     *
     * @return Groupes_Topics
     */
    public function setGroupes(\MeetupBundle\Entity\Groupes $groupes = null)
    {
        $this->groupes = $groupes;
    
        return $this;
    }

    /**
     * Get groupes
     *
     * @return \MeetupBundle\Entity\Groupes
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Set topics
     *
     * @param \MeetupBundle\Entity\Topics $topics
     *
     * @return Groupes_Topics
     */
    public function setTopics(\MeetupBundle\Entity\Topics $topics = null)
    {
        $this->topics = $topics;
    
        return $this;
    }

    /**
     * Get topics
     *
     * @return \MeetupBundle\Entity\Topics
     */
    public function getTopics()
    {
        return $this->topics;
    }
}
