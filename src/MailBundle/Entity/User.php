<?php

namespace MailBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="MailBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\ManyToMany(targetEntity="MailBundle\Entity\Groupp", mappedBy="user")
     * @ORM\JoinTable(name="users_groups")
     */
    private $group;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="MailBundle\Entity\Address", mappedBy="user")
     */
    private $address;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="MailBundle\Entity\Email", mappedBy="user")
     */
    private $email;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="MailBundle\Entity\Telephone", mappedBy="user")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=60)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="secondName", type="string", length=60)
     */
    private $secondName;

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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     * @return User
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string 
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return User
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
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->email = new \Doctrine\Common\Collections\ArrayCollection();
        $this->telephone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add group
     *
     * @param \MailBundle\Entity\Groupp $group
     * @return User
     */
    public function addGroup(\MailBundle\Entity\Groupp $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \MailBundle\Entity\Groupp $group
     */
    public function removeGroup(\MailBundle\Entity\Groupp $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Add address
     *
     * @param \MailBundle\Entity\Address $address
     * @return User
     */
    public function addAddress(\MailBundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \MailBundle\Entity\Address $address
     */
    public function removeAddress(\MailBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add email
     *
     * @param \MailBundle\Entity\Email $email
     * @return User
     */
    public function addEmail(\MailBundle\Entity\Email $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * Remove email
     *
     * @param \MailBundle\Entity\Email $email
     */
    public function removeEmail(\MailBundle\Entity\Email $email)
    {
        $this->email->removeElement($email);
    }

    /**
     * Get email
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add telephone
     *
     * @param \MailBundle\Entity\Telephone $telephone
     * @return User
     */
    public function addTelephone(\MailBundle\Entity\Telephone $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * Remove telephone
     *
     * @param \MailBundle\Entity\Telephone $telephone
     */
    public function removeTelephone(\MailBundle\Entity\Telephone $telephone)
    {
        $this->telephone->removeElement($telephone);
    }

    /**
     * Get telephone
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
}
