<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solution
 *
 * @ORM\Table(name="solution", indexes={@ORM\Index(name="FK_RELATIONSHIP_10", columns={"id"}), @ORM\Index(name="FK_RELATIONSHIP_19", columns={"ID_PROBLEME_AGREGATION"})})
 * @ORM\Entity
 */
class Solution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_SOLUTION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolution;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\Probleme
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\Probleme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PROBLEME_AGREGATION", referencedColumnName="ID_PROBLEME")
     * })
     */
    private $idProblemeAgregation;

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
     * @ORM\ManyToMany(targetEntity="utilisateur\utilisateurBundle\Entity\Probleme", mappedBy="idSolution")
     */
    private $idProbleme;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProbleme = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idSolution
     *
     * @return integer 
     */
    public function getIdSolution()
    {
        return $this->idSolution;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Solution
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
     * Set idProblemeAgregation
     *
     * @param \utilisateur\utilisateurBundle\Entity\Probleme $idProblemeAgregation
     * @return Solution
     */
    public function setIdProblemeAgregation(\utilisateur\utilisateurBundle\Entity\Probleme $idProblemeAgregation = null)
    {
        $this->idProblemeAgregation = $idProblemeAgregation;

        return $this;
    }

    /**
     * Get idProblemeAgregation
     *
     * @return \utilisateur\utilisateurBundle\Entity\Probleme 
     */
    public function getIdProblemeAgregation()
    {
        return $this->idProblemeAgregation;
    }

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Solution
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
     * Add idProbleme
     *
     * @param \utilisateur\utilisateurBundle\Entity\Probleme $idProbleme
     * @return Solution
     */
    public function addIdProbleme(\utilisateur\utilisateurBundle\Entity\Probleme $idProbleme)
    {
        $this->idProbleme[] = $idProbleme;

        return $this;
    }

    /**
     * Remove idProbleme
     *
     * @param \utilisateur\utilisateurBundle\Entity\Probleme $idProbleme
     */
    public function removeIdProbleme(\utilisateur\utilisateurBundle\Entity\Probleme $idProbleme)
    {
        $this->idProbleme->removeElement($idProbleme);
    }

    /**
     * Get idProbleme
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdProbleme()
    {
        return $this->idProbleme;
    }
}
