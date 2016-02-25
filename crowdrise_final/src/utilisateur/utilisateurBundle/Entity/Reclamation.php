<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="FK_RELATIONSHIP_17", columns={"ID_CATEGORIE_RECLAMATION"}), @ORM\Index(name="FK_RELATIONSHIP_18", columns={"id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RECLAMATION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", nullable=true)
     */
    private $contenu;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NOTIFICATION", type="boolean", nullable=true)
     */
    private $notification;

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
     * @var \utilisateur\utilisateurBundle\Entity\CategorieReclamation
     *
     * @ORM\ManyToOne(targetEntity="utilisateur\utilisateurBundle\Entity\CategorieReclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_CATEGORIE_RECLAMATION", referencedColumnName="ID_CATEGORIE_RECLAMATION")
     * })
     */
    private $idCategorieReclamation;



    /**
     * Get idReclamation
     *
     * @return integer 
     */
    public function getIdReclamation()
    {
        return $this->idReclamation;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Reclamation
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Reclamation
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
     * Set notification
     *
     * @param boolean $notification
     * @return Reclamation
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return boolean 
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Reclamation
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
     * Set idCategorieReclamation
     *
     * @param \utilisateur\utilisateurBundle\Entity\CategorieReclamation $idCategorieReclamation
     * @return Reclamation
     */
    public function setIdCategorieReclamation(\utilisateur\utilisateurBundle\Entity\CategorieReclamation $idCategorieReclamation = null)
    {
        $this->idCategorieReclamation = $idCategorieReclamation;

        return $this;
    }

    /**
     * Get idCategorieReclamation
     *
     * @return \utilisateur\utilisateurBundle\Entity\CategorieReclamation 
     */
    public function getIdCategorieReclamation()
    {
        return $this->idCategorieReclamation;
    }
}
