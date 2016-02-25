<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Investissement
 *
 * @ORM\Table(name="investissement", indexes={@ORM\Index(name="FK_RELATIONSHIP_5", columns={"id"})})
 * @ORM\Entity
 */
class Investissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_INVESTISSEMENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvestissement;

    /**
     * @var float
     *
     * @ORM\Column(name="MONATANT", type="float", precision=10, scale=0, nullable=true)
     */
    private $monatant;

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
     * Get idInvestissement
     *
     * @return integer 
     */
    public function getIdInvestissement()
    {
        return $this->idInvestissement;
    }

    /**
     * Set monatant
     *
     * @param float $monatant
     * @return Investissement
     */
    public function setMonatant($monatant)
    {
        $this->monatant = $monatant;

        return $this;
    }

    /**
     * Get monatant
     *
     * @return float 
     */
    public function getMonatant()
    {
        return $this->monatant;
    }

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Investissement
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
