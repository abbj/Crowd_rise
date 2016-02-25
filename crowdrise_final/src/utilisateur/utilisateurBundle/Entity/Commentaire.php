<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="FK_RELATIONSHIP_1", columns={"ID_PROJET"}), @ORM\Index(name="FK_RELATIONSHIP_14", columns={"ID_EVENEMENT"}), @ORM\Index(name="FK_RELATIONSHIP_6", columns={"id"}), @ORM\Index(name="FK_RELATIONSHIP_9", columns={"ID_PROBLEME"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COMMENTAIRE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\Probleme
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\Probleme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PROBLEME", referencedColumnName="ID_PROBLEME")
     * })
     */
    private $idProbleme;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\Projet
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PROJET", referencedColumnName="ID_PROJET")
     * })
     */
    private $idProjet;

    /**
     * @var \utilisateur\utilisateurBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EVENEMENT", referencedColumnName="ID_EVENEMENT")
     * })
     */
    private $idEvenement;

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
     * Get idCommentaire
     *
     * @return integer 
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set idProbleme
     *
     * @param \utilisateur\utilisateurBundle\Entity\Probleme $idProbleme
     * @return Commentaire
     */
    public function setIdProbleme(\utilisateur\utilisateurBundle\Entity\Probleme $idProbleme = null)
    {
        $this->idProbleme = $idProbleme;

        return $this;
    }

    /**
     * Get idProbleme
     *
     * @return \utilisateur\utilisateurBundle\Entity\Probleme 
     */
    public function getIdProbleme()
    {
        return $this->idProbleme;
    }

    /**
     * Set idProjet
     *
     * @param \utilisateur\utilisateurBundle\Entity\Projet $idProjet
     * @return Commentaire
     */
    public function setIdProjet(\utilisateur\utilisateurBundle\Entity\Projet $idProjet = null)
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    /**
     * Get idProjet
     *
     * @return \utilisateur\utilisateurBundle\Entity\Projet 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set idEvenement
     *
     * @param \utilisateur\utilisateurBundle\Entity\Evenement $idEvenement
     * @return Commentaire
     */
    public function setIdEvenement(\utilisateur\utilisateurBundle\Entity\Evenement $idEvenement = null)
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }

    /**
     * Get idEvenement
     *
     * @return \utilisateur\utilisateurBundle\Entity\Evenement 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Commentaire
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
