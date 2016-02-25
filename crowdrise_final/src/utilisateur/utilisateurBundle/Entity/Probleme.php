<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Probleme
 *
 * @ORM\Table(name="probleme", indexes={@ORM\Index(name="FK_RELATIONSHIP_8", columns={"id"})})
 * @ORM\Entity
 */
class Probleme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROBLEME", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProbleme;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="BUDGET", type="float", precision=10, scale=0, nullable=true)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="FICHIER", type="text", nullable=true)
     */
    private $fichier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATE_PUBLICATION", type="datetime", nullable=true)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="TAUX_HORRAIRE", type="string", length=255, nullable=true)
     */
    private $tauxHorraire;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="utilisateur\utilisateurBundle\Entity\Solution", inversedBy="idProbleme")
     * @ORM\JoinTable(name="payement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_PROBLEME", referencedColumnName="ID_PROBLEME")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_SOLUTION", referencedColumnName="ID_SOLUTION")
     *   }
     * )
     */
    private $idSolution;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSolution = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idProbleme
     *
     * @return integer 
     */
    public function getIdProbleme()
    {
        return $this->idProbleme;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Probleme
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
     * Set budget
     *
     * @param float $budget
     * @return Probleme
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     * @return Probleme
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
     * Set datePublication
     *
     * @param \DateTime $datePublication
     * @return Probleme
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime 
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set tauxHorraire
     *
     * @param string $tauxHorraire
     * @return Probleme
     */
    public function setTauxHorraire($tauxHorraire)
    {
        $this->tauxHorraire = $tauxHorraire;

        return $this;
    }

    /**
     * Get tauxHorraire
     *
     * @return string 
     */
    public function getTauxHorraire()
    {
        return $this->tauxHorraire;
    }

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Probleme
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
     * Add idSolution
     *
     * @param \utilisateur\utilisateurBundle\Entity\Solution $idSolution
     * @return Probleme
     */
    public function addIdSolution(\utilisateur\utilisateurBundle\Entity\Solution $idSolution)
    {
        $this->idSolution[] = $idSolution;

        return $this;
    }

    /**
     * Remove idSolution
     *
     * @param \utilisateur\utilisateurBundle\Entity\Solution $idSolution
     */
    public function removeIdSolution(\utilisateur\utilisateurBundle\Entity\Solution $idSolution)
    {
        $this->idSolution->removeElement($idSolution);
    }

    /**
     * Get idSolution
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdSolution()
    {
        return $this->idSolution;
    }
}
