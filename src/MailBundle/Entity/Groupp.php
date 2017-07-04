<?php

namespace MailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupp
 *
 * @ORM\Table(name="groupp")
 * @ORM\Entity(repositoryClass="MailBundle\Repository\GrouppRepository")
 */
class Groupp
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
     * @ORM\ManyToMany(targetEntity="MailBundle\Entity\User", inversedBy="groupp")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="groupp", type="string", length=60)
     */
    private $groupp;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set groupp
     *
     * @param string $groupp
     * @return Groupp
     */
    public function setGroupp($groupp)
    {
        $this->groupp = $groupp;

        return $this;
    }

    /**
     * Get groupp
     *
     * @return string 
     */
    public function getGroupp()
    {
        return $this->groupp;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Groupp
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \MailBundle\Entity\User $user
     * @return Groupp
     */
    public function addUser(\MailBundle\Entity\User $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \MailBundle\Entity\User $user
     */
    public function removeUser(\MailBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUser()
    {
        return $this->user;
    }
}
