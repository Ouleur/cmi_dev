<?php

namespace Cmi\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;


/**
 * Assurance
 *
 * @ORM\Table(name="assurance")
 * @ORM\Entity(repositoryClass="Cmi\ApiBundle\Repository\AssuranceRepository")
 */
class Assurance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Groups({"assurance","carte"})
     */
    private $id;

   


    /**
     * @var string
     *
     * @ORM\Column(name="assure_code", type="string", length=10)
     * @Serializer\Groups({"assurance","carte"})
     */
    private $assureCode;


    /**
     * @var string
     *
     * @ORM\Column(name="assure_libelle", type="string", length=100)
     * @Serializer\Groups({"assurance","carte"})
     */
    private $assureLibelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="assure_date_enreg", type="datetime")
     * @Serializer\Groups({"assurance","carte"})
     */
    private $assureDateEnreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="assure_date_modif", type="datetime")
     * @Serializer\Groups({"assurance","carte"})
     */
    private $assureDateModif;

    /**
     * @ORM\OneToMany(targetEntity="Carte", mappedBy="assurance")
     * @var Carte[]
     * @Serializer\Groups({"assurance"})
     */
    private $cartes;


    public function __construct()
    {
        $this->cartes = new ArrayCollection();
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
     * Set assureCode
     *
     * @param string $assureCode
     *
     * @return Assurance
     */
    public function setAssureCode($assureCode)
    {
        $this->assureCode = $assureCode;

        return $this;
    }

    /**
     * Get assureCode
     *
     * @return string
     */
    public function getAssureCode()
    {
        return $this->assureCode;
    }

    /**
     * Set assureLibelle
     *
     * @param string $assureLibelle
     *
     * @return Assurance
     */
    public function setAssureLibelle($assureLibelle)
    {
        $this->assureLibelle = $assureLibelle;

        return $this;
    }

    /**
     * Get assureLibelle
     *
     * @return string
     */
    public function getAssureLibelle()
    {
        return $this->assureLibelle;
    }

    /**
     * Set assureDateEnreg
     *
     * @param \DateTime $assureDateEnreg
     *
     * @return Assurance
     */
    public function setAssureDateEnreg($assureDateEnreg)
    {
        $this->assureDateEnreg = $assureDateEnreg;

        return $this;
    }

    /**
     * Get assureDateEnreg
     *
     * @return \DateTime
     */
    public function getAssureDateEnreg()
    {
        return $this->assureDateEnreg;
    }

    /**
     * Set assureDateModif
     *
     * @param \DateTime $assureDateModif
     *
     * @return Assurance
     */
    public function setAssureDateModif($assureDateModif)
    {
        $this->assureDateModif = $assureDateModif;

        return $this;
    }

    /**
     * Get assureDateModif
     *
     * @return \DateTime
     */
    public function getAssureDateModif()
    {
        return $this->assureDateModif;
    }

    /**
     * Add carte
     *
     * @param \Cmi\ApiBundle\Entity\Carte $carte
     *
     * @return Assurance
     */
    public function addCarte(\Cmi\ApiBundle\Entity\Carte $carte)
    {
        $this->cartes[] = $carte;

        return $this;
    }

    /**
     * Remove carte
     *
     * @param \Cmi\ApiBundle\Entity\Carte $carte
     */
    public function removeCarte(\Cmi\ApiBundle\Entity\Carte $carte)
    {
        $this->cartes->removeElement($carte);
    }

    /**
     * Get cartes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCartes()
    {
        return $this->cartes;
    }
}
