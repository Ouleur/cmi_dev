<?php

namespace Cmi\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_praticien
 *
 * @ORM\Table(name="type_praticien")
 * @ORM\Entity(repositoryClass="Cmi\ApiBundle\Repository\Type_praticienRepository")
 */
class Type_praticien
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
     * @ORM\Column(name="t_prt_id", type="integer")
     */
    private $t_prt_id;

    /**
     * @var string
     *
     * @ORM\Column(name="t_prt_code", type="string")
     */
    private $t_prt_code;

    /**
     * @var string
     *
     * @ORM\Column(name="t_prt_libelle", type="string", length=100)
     */
    private $t_prt_libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_prt_date_enreg", type="datetime")
     */
    private $t_prt_date_enreg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="t_prt_date_modif", type="datetime")
     */
    private $t_prt_date_modif;


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
     * Set t_prt_id
     *
     * @param integer $t_prt_id
     *
     * @return TypePraticien
     */
    public function setTypePraticienId($t_prt_id)
    {
        $this->t_prt_id = $t_prt_id;

        return $this;
    }

    /**
     * Get t_prt_id
     *
     * @return int
     */
    public function getTypePraticienId()
    {
        return $this->t_prt_id;
    }

    /**
     * Set t_prt_code
     *
     * @param string $t_prt_code
     *
     * @return TypePraticien
     */
    public function setTypePraticienCode($t_prt_code)
    {
        $this->t_prt_code = $t_prt_code;

        return $this;
    }

    /**
     * Get t_prt_code
     *
     * @return string
     */
    public function getTypePraticienCode()
    {
        return $this->t_prt_code;
    }

    /**
     * Set t_prt_libelle
     *
     * @param string $t_prt_libelle
     *
     * @return TypePraticien
     */
    public function setTypePraticienLibelle($t_prt_libelle)
    {
        $this->t_prt_libelle = $t_prt_libelle;

        return $this;
    }

    /**
     * Get t_prt_libelle
     *
     * @return string
     */
    public function getTypePraticienLibelle()
    {
        return $this->t_prt_libelle;
    }

    /**
     * Set t_prt_date_enreg
     *
     * @param \DateTime $t_prt_date_enreg
     *
     * @return TypePraticien
     */
    public function setTypePraticienDateEnreg($t_prt_date_enreg)
    {
        $this->t_prt_date_enreg = $t_prt_date_enreg;

        return $this;
    }

    /**
     * Get t_prt_date_enreg
     *
     * @return \DateTime
     */
    public function getTypePraticienDateEnreg()
    {
        return $this->t_prt_date_enreg;
    }

    /**
     * Set t_prt_date_modif
     *
     * @param \DateTime $t_prt_date_modif
     *
     * @return TypePraticien
     */
    public function setTypePraticienDateModif($t_prt_date_modif)
    {
        $this->t_prt_date_modif = $t_prt_date_modif;

        return $this;
    }

    /**
     * Get t_prt_date_modif
     *
     * @return \DateTime
     */
    public function getTypePraticienDateModif()
    {
        return $this->t_prt_date_modif;
    }

    /**
     * Set tPrtId
     *
     * @param integer $tPrtId
     *
     * @return Type_praticien
     */
    public function setTPrtId($tPrtId)
    {
        $this->t_prt_id = $tPrtId;

        return $this;
    }

    /**
     * Get tPrtId
     *
     * @return integer
     */
    public function getTPrtId()
    {
        return $this->t_prt_id;
    }

    /**
     * Set tPrtCode
     *
     * @param string $tPrtCode
     *
     * @return Type_praticien
     */
    public function setTPrtCode($tPrtCode)
    {
        $this->t_prt_code = $tPrtCode;

        return $this;
    }

    /**
     * Get tPrtCode
     *
     * @return string
     */
    public function getTPrtCode()
    {
        return $this->t_prt_code;
    }

    /**
     * Set tPrtLibelle
     *
     * @param string $tPrtLibelle
     *
     * @return Type_praticien
     */
    public function setTPrtLibelle($tPrtLibelle)
    {
        $this->t_prt_libelle = $tPrtLibelle;

        return $this;
    }

    /**
     * Get tPrtLibelle
     *
     * @return string
     */
    public function getTPrtLibelle()
    {
        return $this->t_prt_libelle;
    }

    /**
     * Set tPrtDateEnreg
     *
     * @param \DateTime $tPrtDateEnreg
     *
     * @return Type_praticien
     */
    public function setTPrtDateEnreg($tPrtDateEnreg)
    {
        $this->t_prt_date_enreg = $tPrtDateEnreg;

        return $this;
    }

    /**
     * Get tPrtDateEnreg
     *
     * @return \DateTime
     */
    public function getTPrtDateEnreg()
    {
        return $this->t_prt_date_enreg;
    }

    /**
     * Set tPrtDateModif
     *
     * @param \DateTime $tPrtDateModif
     *
     * @return Type_praticien
     */
    public function setTPrtDateModif($tPrtDateModif)
    {
        $this->t_prt_date_modif = $tPrtDateModif;

        return $this;
    }

    /**
     * Get tPrtDateModif
     *
     * @return \DateTime
     */
    public function getTPrtDateModif()
    {
        return $this->t_prt_date_modif;
    }
}
