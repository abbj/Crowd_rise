<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="FK_RELATIONSHIP_12", columns={"id"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MESSAGE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", nullable=true)
     */
    private $contenu;
    
    
    
    
     /**
     *
     * @ORM\Column(type="string")
     */
    private $nomproprietaire;


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
     * @ORM\Column(type="integer")
     */
    private $idsender;

    function getIdsender() {
        return $this->idsender;
    }

    function setIdsender($idsender) {
        $this->idsender = $idsender;
    }

    /**
     * @ORM\Column(type="integer")
     */
    private $idreceiver;

    function getidreceiver() {
        return $this->idreceiver;
    }

    function setidreceiver($idreceiver) {
        $this->idreceiver = $idreceiver;
    }

    

    /**
     * Get idMessage
     *
     * @return integer 
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Message
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
     * Set id
     *
     * @param \utilisateur\utilisateurBundle\Entity\User $id
     * @return Message
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
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $sendAt;
    
    function getSendAt() {
        return $this->sendAt;
    }

    
    function setSendAt(\DateTime $sendAt) {
        $this->sendAt = $sendAt;
    }

    function getNomproprietaire() {
        return $this->nomproprietaire;
    }

    function setNomproprietaire($nomproprietaire) {
        $this->nomproprietaire = $nomproprietaire;
    }



    
}
