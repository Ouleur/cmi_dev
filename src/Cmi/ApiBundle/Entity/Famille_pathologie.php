<?php

namespace Cmi\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille_pathologie
 *
 * @ORM\Table(name="famille_pathologie")
 * @ORM\Entity(repositoryClass="Cmi\ApiBundle\Repository\FamillePathologieRepository")
 */
class Famille_pathologie
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
     * @ORM\Column(name="fam_patho_id", type="integer")
     */
    private $fam_patho_id;

    /**
     * @var string
     *
     * @ORM\Column(name="fam_patho_code", type="string")
     */
    private $fam_patho_code;

    /**
     * @var string
     *
     * @ORM\Column(name="fam_patho_libelle", type="string", length=100)
     */
    private $fam_patho_libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fam_patho_date_enreg", type="datetime")
     */
    private $fam_patho_date_enreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fam_patho_date_modif", type="datetime")
     */
    private $fam_patho_date_modif;


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
     * Set fam_patho_id
     *
     * @param integer $fam_patho_id
     *
     * @return Famille_pathologie
     */
    public function setFamPathoId($fam_patho_id)
    {
        $this->fam_patho_id = $fam_patho_id;

        return $this;
    }

    /**
     * Get fam_patho_id
     *
     * @return int
     */
    public function getFamPathoId()
    {
        return $this->fam_patho_id;
    }

    /**
     * Set fam_patho_code
     *
     * @param string $fam_patho_code
     *
     * @return Famille_pathologie
     */
    public function setFamPathoCode($fam_patho_code)
    {
        $this->fam_patho_code = $fam_patho_code;

        return $this;
    }

    /**
     * Get fam_patho_code
     *
     * @return string
     */
    public function getFamPathoCode()
    {
        return $this->fam_patho_code;
    }

    /**
     * Set fam_patho_libelle
     *
     * @param string $fam_patho_libelle
     *
     * @return Famille_pathologie
     */
    public function setFamPathoLibelle($fam_patho_libelle)
    {
        $this->fam_patho_libelle = $fam_patho_libelle;

        return $this;
    }

    /**
     * Get fam_patho_libelle
     *
     * @return string
     */
    public function getFamPathoLibelle()
    {
        return $this->fam_patho_libelle;
    }

    /**
     * Set fam_patho_date_enreg
     *
     * @param \DateTime $fam_patho_date_enreg
     *
     * @return Famille_pathologie
     */
    public function setFamPathoDateEnreg($fam_patho_date_enreg)
    {
        $this->fam_patho_date_enreg = $fam_patho_date_enreg;

        return $this;
    }

    /**
     * Get fam_patho_date_enreg
     *
     * @return \DateTime
     */
    public function getFamPathoDateEnreg()
    {
        return $this->fam_patho_date_enreg;
    }

    /**
     * Set fam_patho_date_modif
     *
     * @param \DateTime $fam_patho_date_modif
     *
     * @return Famille_pathologie
     */
    public function setFamPathoDateModif($fam_patho_date_modif)
    {
        $this->fam_patho_date_modif = $fam_patho_date_modif;

        return $this;
    }

    /**
     * Get fam_patho_date_modif
     *
     * @return \DateTime
     */
    public function getFamPathoDateModif()
    {
        return $this->fam_patho_date_modif;
    }
}
