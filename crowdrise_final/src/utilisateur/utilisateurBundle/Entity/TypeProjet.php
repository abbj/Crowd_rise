<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeProjet
 *
 * @ORM\Table(name="type_projet")
 * @ORM\Entity
 */
class TypeProjet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPE", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idType;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPE", type="string", length=255, nullable=true)
     */
    private $type;



    /**
     * Get idType
     *
     * @return integer 
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TypeProjet
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
