<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="criticy", type="integer", nullable=true)
     */
    private $criticy;

    /**
     * @var EventBundle\Entity\Location
     *
     * @ORM\OneToMany(targetEntity="Location", mappedBy="events")
     */
    private $location;

    /**
     * @var PeopleBundle\Entity\People
     *
     * @ORM\OneToMany(targetEntity="People\Entity\People", mappedBy="events")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creator;

    /**
     * @var PeopleBundle\Entity\People
     *
     * @ORM\ManyToMany(targetEntity="People\Entity\People", mappedBy="events_hit")
     * @ORM\JoinColumn(nullable=false)
     */
    private $concerned_people;

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
     * Set criticy
     *
     * @param integer $criticy
     *
     * @return Event
     */
    public function setCriticy($criticy)
    {
        $this->criticy = $criticy;

        return $this;
    }

    /**
     * Get criticy
     *
     * @return int
     */
    public function getCriticy()
    {
        return $this->criticy;
    }
}

