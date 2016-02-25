<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="FK_RELATIONSHIP_13", columns={"id"}), @ORM\Index(name="FK_RELATIONSHIP_15", columns={"ID_INVESTISSEMENT"}), @ORM\Index(name="FK_RELATIONSHIP_16", columns={"ID_CATEGORIE_EVENEMENT"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_EVENEMENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_DEBUT", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_FIN", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\CategorieEvenement
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\CategorieEvenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIE_EVENEMENT", referencedColumnName="ID_CATEGORIE_EVENEMENT")
     * })
     */
    private $idCategorieEvenement;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\Investissement
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\Investissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_INVESTISSEMENT", referencedColumnName="ID_INVESTISSEMENT")
     * })
     */
    private $idInvestissement;



    /**
     * Get idEvenement
     *
     * @return integer 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Evenement
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Evenement
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Evenement
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
     * Set idCategorieEvenement
     *
     * @param \utilisateur\utilisateurBundle\Entity\CategorieEvenement $idCategorieEvenement
     * @return Evenement
     */
    public function setIdCategorieEvenement(\utilisateur\utilisateurBundle\Entity\CategorieEvenement $idCategorieEvenement = null)
    {
        $this->idCategorieEvenement = $idCategorieEvenement;

        return $this;
    }

    /**
     * Get idCategorieEvenement
     *
     * @return \utilisateur\utilisateurBundle\Entity\CategorieEvenement 
     */
    public function getIdCategorieEvenement()
    {
        return $this->idCategorieEvenement;
    }

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Evenement
     */
    public function setId(\utilisateur\utilisateurBundle\Entity\User $id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \utilisateur\utilisateurBundle\Entity\User 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idInvestissement
     *
     * @param \utilisateur\utilisateurBundle\Entity\Investissement $idInvestissement
     * @return Evenement
     */
    public function setIdInvestissement(\utilisateur\utilisateurBundle\Entity\Investissement $idInvestissement = null)
    {
        $this->idInvestissement = $idInvestissement;

        return $this;
    }

    /**
     * Get idInvestissement
     *
     * @return \utilisateur\utilisateurBundle\Entity\Investissement 
     */
    public function getIdInvestissement()
    {
        return $this->idInvestissement;
    }
}
