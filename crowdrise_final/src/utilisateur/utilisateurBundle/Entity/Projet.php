<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="FK_RELATIONSHIP_2", columns={"ID_CATEGORIE_PROJET"}), @ORM\Index(name="FK_RELATIONSHIP_3", columns={"ID_INVESTISSEMENT"}), @ORM\Index(name="FK_RELATIONSHIP_4", columns={"id"}), @ORM\Index(name="FK_RELATIONSHIP_7", columns={"ID_TYPE"})})
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROJET", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM_PROJET", type="string", length=255, nullable=true)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="RESUME", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="IMAGE", type="text", nullable=true)
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDJET", type="float", precision=10, scale=0, nullable=true)
     */
    private $budjet;

    /**
     * @var string
     *
     * @ORM\Column(name="FICHIER", type="text", nullable=true)
     */
    private $fichier;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\TypeProjet
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\TypeProjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPE", referencedColumnName="ID_TYPE")
     * })
     */
    private $idType;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\CategorieProjet
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\CategorieProjet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIE_PROJET", referencedColumnName="ID_CATEGORIE_PROJET")
     * })
     */
    private $idCategorieProjet;

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
     * @var \utilisateur\utilisateurBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;



    /**
     * Get idProjet
     *
     * @return integer 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set nomProjet
     *
     * @param string $nomProjet
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string 
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Projet
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Projet
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set budjet
     *
     * @param float $budjet
     * @return Projet
     */
    public function setBudjet($budjet)
    {
        $this->budjet = $budjet;

        return $this;
    }

    /**
     * Get budjet
     *
     * @return float 
     */
    public function getBudjet()
    {
        return $this->budjet;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     * @return Projet
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string 
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set idType
     *
     * @param \utilisateur\utilisateurBundle\Entity\TypeProjet $idType
     * @return Projet
     */
    public function setIdType(\utilisateur\utilisateurBundle\Entity\TypeProjet $idType = null)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return \utilisateur\utilisateurBundle\Entity\TypeProjet 
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set idCategorieProjet
     *
     * @param \utilisateur\utilisateurBundle\Entity\CategorieProjet $idCategorieProjet
     * @return Projet
     */
    public function setIdCategorieProjet(\utilisateur\utilisateurBundle\Entity\CategorieProjet $idCategorieProjet = null)
    {
        $this->idCategorieProjet = $idCategorieProjet;

        return $this;
    }

    /**
     * Get idCategorieProjet
     *
     * @return \utilisateur\utilisateurBundle\Entity\CategorieProjet 
     */
    public function getIdCategorieProjet()
    {
        return $this->idCategorieProjet;
    }

    /**
     * Set idInvestissement
     *
     * @param \utilisateur\utilisateurBundle\Entity\Investissement $idInvestissement
     * @return Projet
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

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Projet
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
}
