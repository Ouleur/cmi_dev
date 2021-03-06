<?php


namespace Cmi\ApiBundle\Entity;

// use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use JMS\Serializer\Annotation as Serializer;


/**
 * User
 *
 * @ORM\Table(name="users",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="users_email_unique",columns={"email"})})
 * @ORM\Entity
 */
class User implements UserInterface
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Groups({"droitAcces","userconected","user","auth-token"})
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string")
     * @Serializer\Groups({"droitAcces","userconected","user","auth-token"})
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string")
     * @Serializer\Groups({"droitAcces","userconected","user","auth-token"})
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string")
     * @Serializer\Groups({"droitAcces","userconected","user","auth-token"})
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="DroitAcces", mappedBy="user")
     * @var DroitAcces[]
     * @Serializer\Groups({"userconected"})
     */
    private $droitAcces;

    /**
     * @ORM\OneToOne(targetEntity="Praticien")
     * @Serializer\Groups({"userconected"})
     */
    private $praticen;
    

    private $plainPassword;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string")
     * @Serializer\Groups({"user"})
     */
    private $password;


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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set plainPassword
     *
     * @param string $plainPassword
     *
     * @return User
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        return [];
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->droitAcces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add droitAcce
     *
     * @param \Cmi\ApiBundle\Entity\DroitAcces $droitAcce
     *
     * @return User
     */
    public function addDroitAcce(\Cmi\ApiBundle\Entity\DroitAcces $droitAcce)
    {
        $this->droitAcces[] = $droitAcce;

        return $this;
    }

    /**
     * Remove droitAcce
     *
     * @param \Cmi\ApiBundle\Entity\DroitAcces $droitAcce
     */
    public function removeDroitAcce(\Cmi\ApiBundle\Entity\DroitAcces $droitAcce)
    {
        $this->droitAcces->removeElement($droitAcce);
    }

    /**
     * Get droitAcces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDroitAcces()
    {
        return $this->droitAcces;
    }

    /**
     * Set praticen
     *
     * @param \Cmi\ApiBundle\Entity\Praticien $praticen
     *
     * @return User
     */
    public function setPraticen(\Cmi\ApiBundle\Entity\Praticien $praticen = null)
    {
        $this->praticen = $praticen;

        return $this;
    }

    /**
     * Get praticen
     *
     * @return \Cmi\ApiBundle\Entity\Praticien
     */
    public function getPraticen()
    {
        return $this->praticen;
    }
}
